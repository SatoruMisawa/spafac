<?php

namespace App;

use DB;
use Storage;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'name',
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
}