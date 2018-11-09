<?php

namespace App;

use DB;
use Storage;
use App\Plan;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
	//入力状況
	const INPUT_STATUS_NONE = 0;
	const INPUT_STATUS_INSTITUTION = 1;
	const INPUT_STATUS_BASIC = 2;
	const INPUT_STATUS_EXPLANATION = 3;
	const INPUT_STATUS_COMPLETE = 4;
	
	protected $fillable = [
		'user_id', 'facility_id',
		'key_delivery_id',
		'capacity', 'floor_area',
	];
	
	public function facility() {
		return $this->belongsTo(Facility::class);
	}

	public function plan() {
		return $this->hasOne(Plan::class);
	}
	
	public function images() {
		return $this->hasMany(SpaceImage::class);
	}

	public function spaceUsages() {
		return $this->belongsToMany(SpaceUsage::class);
	}
}