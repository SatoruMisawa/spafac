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
		'address_id',
		'family_name', 'family_name_ruby', 'given_name', 'given_name_ruby',
		'email', 'tel', 'password', 'profile_image_url', 'gender',
		'dob_day', 'dob_month', 'dob_year', 'email_verification_token', 'has_verified_email',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	protected $claimant;

	protected $feeCollector;

	public function __construct($params = []) {
		parent::__construct($params);
		$this->claimant = app()->make(Claimant::class);
		$this->feeCollector = app()->make(FeeCollector::class);
	}

	public function address() {
		return $this->belongsTo(Address::class);
	}

	public function claimantUser() {
		return $this->hasOne(StripeUser::class, 'user_id');
	}

	public function stripeCharges() {
		return $this->hasMany(StripeCharge::class, 'user_id');
	}	

	public function chargeHistories() {
		return $this->hasMany(ChargeHistory::class, 'user_id');
	}

	public function facilities() {
		return $this->hasMany(Facility::class, 'user_id');
	}

	public function spaces() {
		return $this->hasMany(Space::class, 'user_id');
	}

	public function providers() {
		return $this->belongsToMany(Provider::class, 'user_provider')->using(UserProvider::class);
	}

	public function bankAccount() {
		return $this->hasOne(BankAccount::class, 'user_id');
	}

	public function asGuest() {
		$guest = new Guest($this->toArray());
		$guest->id = $this->id;
		return $guest;
	}

	public function asHost() {
		$host = new Host($this->toArray());
		$host->id = $this->id;
		return $host;
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

	public function isSameAs(User $user) {
		return $this->id === $user->id;
	}
}