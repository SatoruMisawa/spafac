<?php

namespace App;

use App\MyModel;
use App\Service\Claimant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use MyModel;
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

	public function host() {
		return $this->hasOne('App\Host')->withDefault();
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

	/**
	* password
	*/
	public function setPasswordAttribute($value) {
		
		//パスワードハッシュ
		$this->attributes['password'] = password_hash($value, PASSWORD_BCRYPT);
		
	}
	
	/**
	* メール認証完了
	*/
	public function verified() {
		$this->email_token = null;
		$this->verified = 1;
		$this->status = 1;
		$this->save();
	}
	
	/**
	* メール認証
	*/
	public static function verify($emailToken) {
		
		$query = static::query()
			->where('email_token', '=', $emailToken)
			;
		
		$user = $query->first();
		if ($user) {
			$user->verified();
			return true;
		}
		
		return false;
	}
	
	/**
	* スペースオーナー
	*/
	public function getHost() {
		$host = $this->host;
		if (!$host->id) {
			//作成
			$host->user()->associate($this);
			$host->save();
		}
		return $host;
	}
	
	/**
	* メールアドレスで検索
	*/
	public static function find4Email($email) {
		
		$query = static::query()
			->where('email', '=', $email)
			->withTrashed()
			;
		
		$user = $query->first();
		
		return $user;
		
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
		if ($this->id === $plan->user_id) {
			return;
		}

		if (Apply::where('plan_id', $plan->id)->exists()) {
			return;
		}

		$this->applies()->create([
			'plan_id' => $plan->id,
		]);
	}

	public function approve(Apply $apply) {
		if ($this->id !== $apply->plan->user->id) {
			return;
		}

		Reservation::create([
			'user_id' => $apply->user_id,
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
}