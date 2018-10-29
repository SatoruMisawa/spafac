<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialAccount extends Model
{
	use MyModel;
	use SoftDeletes;
	
	/**
	* The database table used by the model.
	*
	* @var string
	*/
	//protected $table = '';
	
	/**
	* The attributes excluded from the model's JSON form.
	*
	* @var array
	*/
	protected $dates = ['deleted_at'];
	
	/**
	* The attributes that are mass assignable.
	*/
	protected $fillable = [
	];
	
	/**
	* relations
	*/
	public function user() {
		return $this->belongsTo('App\User');
	}
	
	/**
	* 探す
	*/
	public static function find4ProviderId($providerName, $providerId) {
		
		$query = static::query()
			->join('users', 'social_accounts.user_id', '=', 'users.id')
			->where('social_accounts.provider_name', '=', $providerName)
			->where('social_accounts.provider_id', '=', $providerId)
			->whereNull('users.deleted_at')
			;
		
		$socialAccount = $query->first();
		
		return $socialAccount;
	}
	
	/**
	* 登録
	*/
	public static function regist($providerName, $providerId, $email, $name) {
		
		//users
		$user = new User();
		$user->email = $email;
		$user->name = $name;
		$user->save();
		
		//social_accounts;
		$socialAccount = new SocialAccount();
		$socialAccount->user_id = $user->id;
		$socialAccount->provider_name = $providerName;
		$socialAccount->provider_id = $providerId;
		$socialAccount->save();
		
		return $socialAccount;
	}
	
	
}
