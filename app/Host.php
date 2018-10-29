<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Host extends Model
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
		'name1', 'name2', 'name1_kana', 'name2_kana', 'sex', 'birth_date', 'tel', 'corporation',
		'zip', 'prefecture_id', 'address1', 'address1_kana', 'address2', 'address2_kana', 'address3', 'address3_kana',
		'bank_name', 'bank_code', 'bank_branch_name', 'bank_branch_code', 'bank_account_number', 'bank_account_name',
		'profile_media_id', 'identification_media_id',
	];
	
	/**
	* relations
	*/
	public function user() {
		return $this->belongsTo('App\User');
	}
	public function institutions() {
		return $this->hasMany('App\Institution');
	}
	public function spaces() {
		return $this->hasMany('App\Space');
	}
	
	/**
	* 施設一覧
	*/
	public function getInstitutions() {
		
		$query = $this->institutions()
			->orderBy('id', 'ASC');
		
		$institutions = $query->get();
		
		return $institutions;
	}
	
	/**
	* スペース一覧
	*/
	public function getSpaces() {
		
		$query = $this->spaces()
			->orderBy('id', 'ASC');
		
		$spaces = $query->get();
		
		return $spaces;
	}
	
	/**
	* 名称
	*/
	public function getName() {
		
		$name = $this->name1 . $this->name2;
		
		return $name;
	}
}

