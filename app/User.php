<?php

namespace App;

use App\Service\Claimant;
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
		'nickname', 'password', 'email', 'name',
		'tel', 'zip', 'prefecture_id', 'address1', 'address2', 'address3',
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

	public function __construct($params = []) {
		parent::__construct($params);

		$this->claimant = app()->make(Claimant::class);
	}

	public function claimantUser() {
		return $this->hasOne(StripeUser::class);
	}

	public function stripeCharges() {
		return $this->hasMany(StripeCharge::class);
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

		$apply->user->reservations()->create([
			'plan_id' => $apply->plan_id,
		]);
	}

	public function chargeFor(Reservation $reservation) {
		$charge = $this->claimant->charge([
			'amount' => $reservation->plan->price_per_hour,
			'source' => $reservation->user->claimantUser->claimant_source_id,
			'destination' => $this->claimantUser->claimant_account_id,
		]);
		
		$this->stripeCharges()->create([
			'reservation_id' => $reservation->id,
			'stripe_charge_id' => $charge->id,
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