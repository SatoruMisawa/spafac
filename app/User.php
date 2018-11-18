<?php

namespace App;

use App\Service\Claimant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

	public function stripeUser() {
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

	public function bankAccounts() {
		return $this->hasMany(BankAccount::class);
	}
			
	public function prepareToVerifyEmail() {
		$this->email_verification_token = str_random(10);
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

	public function apply(Plan $plan) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}

		if ($plan->isAlreadyApplied()) {
			return;
		}

		$this->applies()->create([
			'plan_id' => $plan->id,
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
			'amount' => $reservation->plan->amount,
			// 'source' => $reservation->user->stripeUser->stripe_source_id,
			'source' => 'tok_1DRiDdDX6z5hkjQAfFSM8xY8',
			'dst_account_id' => $this->stripeUser->stripe_account_id,
		]);
		
		$this->stripeCharges()->create([
			'reservation_id' => $reservation->id,
			'stripe_charge_id' => $charge->id,
		]);
	}

	public function createAndConnectWithStripeAccount() {
		$stripeAccount = $this->claimant->createAccount([
			'country' => 'JP',
			'type' => 'custom',
		]);
		
		$this->stripeUser()->create([
			'stripe_account_id' => $stripeAccount->id,
		]);
	}

	public function ownFacility(Facility $facility) {
		return $this->id === $facility->user_id;
	}

	public function ownSpace(Space $space) {
		return $this->id === $space->user_id;
	}
}