<?php

namespace App;

use App\Service\Claimant;
use App\Service\FeeCollector;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'family_name', 'given_name', 'password', 'email', 'profile_image_url',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	private $claimant;

	private $feeCollector;

	public function __construct($params = []) {
		parent::__construct($params);
		$this->claimant = app()->make(Claimant::class);
		$this->feeCollector = app()->make(FeeCollector::class);
	}

	public function claimantUser() {
		return $this->hasOne(StripeUser::class);
	}

	public function stripeCharges() {
		return $this->hasMany(StripeCharge::class);
	}	

	public function chargeHistories() {
		return $this->hasMany(ChargeHistory::class);
	}

	public function facilities() {
		return $this->hasMany(Facility::class);
	}

	public function spaces() {
		return $this->hasMany(Space::class);
	}

	public function providers() {
		return $this->belongsToMany(Provider::class, 'user_provider')->using(UserProvider::class);
	}
	
	public function applies() {
		return $this->hasMany(Apply::class);
	}

	public function reservations() {
		return $this->hasMany(Reservation::class);
	}

	public function bankAccount() {
		return $this->hasOne(BankAccount::class);
	}

	public function prepareToVerifyEmail() {
		$this->email_verification_token = str_random(30);
		$this->save();
	}

	public function verifyEmail($token) {
		if ($this->email_verification_token !== $token) {
			throw new \Exception('メールアドレスの認証に失敗しました');
		}

		$this->email_verification_token = null;
		$this->has_verified_email = true;
		$this->save();
	}

	public function applyHourlyPlan(Plan $plan, int $hours) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}

		$this->applies()->create([
			'plan_id' => $plan->id,
			'price' => $plan->price_per_hour * $hours,
		]);
	}

	public function applyDaylyPlan(Plan $plan) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}

		$this->applies()->create([
			'plan_id' => $plan->id,
			'price' => $plan->price_per_day,
		]);
	}

	public function isSameAs(User $user) {
		return $this->id === $user->id;
	}

	public function approve(Apply $apply) {
		if (!$this->isSameAs($apply->plan->planner())) {
			return;
		}

		Reservation::create([
			'host_id' => $apply->plan->planner()->id,
			'guest_id' => $apply->user->id,
			'apply_id' => $apply->id,
		]);
	}

	public function chargeFor(Reservation $reservation) {
		$this->feeCollector->setPrice($reservation->appley);
		$charge = $this->claimant->charge([
			'guet_price' => $this->feeCollector->calculateGuestPriceWithFee(),
			'host_reward' => $this->feeCollector->calculateHostReward(),
			'source' => $reservation->guest->claimantUser->claimant_source_id,
			'destination' => $this->claimantUser->claimant_account_id,
		]);
		
		$reservation->getCharged();

		$chargeHistory = $reservation->guest->chargeHistories()->create([
			'reservation_id' => $reservation->id,
		]);

		$chargeHistory->claimantChargeHistory()->create([
			'claimant_charge_history_id' => $charge->id,
		]);
	}

	public function connectClaimantAccount() {
		$claimantAccount = $this->claimant->connectAccount([
			'country' => 'JP',
			'type' => 'custom',
		]);
		
		$this->claimantUser()->create([
			'claimant_account_id' => $claimantAccount->id,
		]);
	}

	public function connectClaimantBankAccount() {
		$this->claimant->connectBankAccount([
			'account_id' => $this->claimantUser->claimant_account_id,
			'bank_account_id' => $this->bankAccount->claimantBankAccount->claimant_bank_account_id,
		]);
	}

	public function fillClaimantRequirements() {
		$this->claimant->fillRequirements([
			'account_id' => $this->claimantUser->claimant_account_id,
			'legal_entity' => [
				'address_kana' => [
					'postal_code' => '',
					'state' => '',
					'city' => '',
					'town' => '',
					'line1' => '',
				],
				'address_kanji' => [
					'postal_code' => '',
					'state' => '',
					'city' => '',
					'town' => '',
					'line1' => '',
				],
				'dob' => [
					'day' => '',
					'month' => '',
					'year' => '',
				],
				'first_name_kana' => 'おおさか',
				'first_name_kanji' => '大阪',
				'last_name_kana' => 'たろう',
				'last_name_kanji' => '太郎',
				'gender' => 'male',
				'phone_number' => '',
				'type' => 'individual',
			],
			'tos_acceptance' => [
				'date' => Carbon::now()->timestamp,
				'ip' => request()->ip(),
			],
		]);
	}

	public function ownFacility(Facility $facility) {
		return $this->id === $facility->user_id;
	}

	public function ownSpace(Space $space) {
		return $this->id === $space->user_id;
	}
}