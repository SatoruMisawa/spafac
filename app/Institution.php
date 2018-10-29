<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
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
		'name', 'zip', 'prefecture_id', 'address1', 'address2', 'address3', 'address1_kana', 'address2_kana', 'address3_kana', 'latitude', 'longitude', 'access', 'tel', 'institution_kind_id'
	];
	
	/**
	* relations
	*/
	public function host() {
		return $this->belongsTo('App\Host');
	}
	public function institutionKind() {
		return $this->belongsTo('App\InstitutionKind');
	}
	public function prefecture() {
		return $this->belongsTo('App\Prefecture');
	}
	
	/**
	* 選択肢
	*/
	public static function get4Select() {
		
		$query = static::query()
			->select('id', 'name')
			->orderBy('display_order', 'ASC')
			->orderBy('id', 'ASC')
			;
		
		$purposes = $query->get();
		
		return $purposes;
	}
	
	/**
	* 選択肢
	*/
	public static function array4Select() {
		
		$query = static::query()
			->select('id', 'name')
			->orderBy('display_order', 'ASC')
			->orderBy('id', 'ASC')
			;
		
		$list = $query->pluck('name', 'id')->toArray();
		
		return $list;
	}
	
	/**
	* 住所
	*/
	public function getShortAddress() {
		
		$address = $this->prefecture->name . $this->address1 . $this->address2 . $this->address3;
		
		return $address;
	}
	
	/**
	* 住所(市区町村まで)
	*/
	public function getAddress() {
		
		$address = $this->prefecture->name . $this->address1;
		
		return $address;
	}
	
}
