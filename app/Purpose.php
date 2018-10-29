<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purpose extends Model
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
	* 選択肢
	*/
	public static function array5Select() {
		
		$query = static::query()
			->select('id', 'name','page')
			->orderBy('display_order', 'ASC')
			->orderBy('id', 'ASC')
			;
		
		$list = $query->pluck('name','page','id')->toArray();
		
		return $list;
	}
}
