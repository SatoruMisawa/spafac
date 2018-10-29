<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanDay extends Model
{
	use MyModel;
	use SoftDeletes;
	
	//曜日
	const DAY_OF_WEEK_SUNDAY = 0;
	const DAY_OF_WEEK_MONDAY = 1;
	const DAY_OF_WEEK_TUESDAY = 2;
	const DAY_OF_WEEK_WEDNESDAY = 3;
	const DAY_OF_WEEK_THURSDAY = 4;
	const DAY_OF_WEEK_FRIDAY = 5;
	const DAY_OF_WEEK_SATURDAY = 6;
	const DAY_OF_WEEK_HOLIDAY = 7;
	
	public static $dayOfWeekList = array(
		0 => '日曜日',
		1 => '月曜日',
		2 => '火曜日',
		3 => '水曜日',
		4 => '木曜日',
		5 => '金曜日',
		6 => '土曜日',
		7 => '祝日',
	);
	
	//時間
	public static $hourList = array(
		0 => '00', 1 => '01', 2 => '02', 3 => '03', 4 => '04', 5 => '05', 6 => '06', 7 => '07', 8 => '08', 9 => '09',
		10 => '10', 11 => '11', 12 => '12', 13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18', 19 => '19',
		20 => '20', 21 => '22', 22 => '22', 23 => '23', 24 => '24', 25 => '25', 26 => '26', 27 => '27', 28 => '28', 29 => '29',
		30 => '30', 31 => '33', 32 => '32', 33 => '33', 34 => '34', 35 => '35', 36 => '36'
	);
	
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
		'day_of_week', 'available', 'hour_from', 'hour_to',
	];
	
	/**
	* relations
	*/
	public function plan() {
		return $this->belongsTo('App\Plan');
	}
	
}
