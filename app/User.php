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
	
	public function connectClaimantAccount() {
		$claimantAccount = $this->claimant->connectAccount([
			'country' => 'JP',
			'type' => 'custom',
		]);
		
		if ($this->claimantUser === null) {
			$this->claimantUser()->create([
				'claimant_account_id' => $claimantAccount->id,
			]);
			return;
		}
		
		$this->claimantUser->update([
			'claimant_account_id' => $claimantAccount->id,
		]);
	}

	public function connectClaimantCustomer() {
		$claimantCustomer = $this->claimant->connectCustomer([
			'email' => 'paying.user@example.com',
			'source' => 'tok_1Db4pFJoWq7YlbrqqbJDVHun',
		]);
		
		if ($this->claimantUser === null) {
			$this->claimantUser()->create([
				'claimant_customer_id' => $claimantCustomer->id,
			]);
			return;	
		}

		$this->claimantUser->update([
			'claimant_customer_id' => $claimantCustomer->id,
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
					'postal_code' => $this->address->zip,
					'state' => $this->address->prefecture->name_ruby,
					'city' => $this->address->address1_ruby,
					'town' => $this->address->address2_ruby,
					'line1' => $this->address->address3_ruby,
				],
				'address_kanji' => [
					'postal_code' => $this->address->zip,
					'state' => $this->address->prefecture->name,
					'city' => $this->address->address1,
					'town' => $this->address->address2,
					'line1' => $this->address->address3
				],
				'dob' => [
					'day' => $this->dob_day,
					'month' => $this->dob_month,
					'year' => $this->dob_year,
				],
				'first_name_kana' => $this->family_name_ruby,
				'first_name_kanji' => $this->family_name,
				'last_name_kana' => $this->given_name_ruby,
				'last_name_kanji' => $this->given_name,
				'gender' => $this->gender,
				'phone_number' => $this->tel,
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