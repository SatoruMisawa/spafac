<?php

namespace App;

use App\MyModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use MyModel;
	use SoftDeletes;
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'nickname', 'profile',
		'name1', 'name2', 'tel', 'industry_id', 'job_id', 'corporation', 'corporation_name', 'department_name', 'zip', 'prefecture_id', 'address1', 'address2', 'address3', 'profile_media_id',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	* relations
	*/
	public function host() {
		return $this->hasOne('App\Host')->withDefault();
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

}
