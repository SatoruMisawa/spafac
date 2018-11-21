<?php

namespace App;

use DB;
use Storage;
use App\Plan;
use App\Facility;
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
		'user_id', 'facility_id', 'key_delivery_id',
		'name', 'about', 'capacity', 'floor_area',
		'about_amenity', 'about_food_drink', 'about_cleanup',
		'cancellation_policy', 'terms_of_use'
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function facility() {
		return $this->belongsTo(Facility::class);
	}

	public function amenities() {
		return $this->belongsToMany(Amenity::class);
	}

	public function plans() {
		return $this->hasMany(Plan::class);
	}

	public function spaceAttachments() {
		return $this->hasMany(SpaceAttachment::class);
	}

	public function spaceUsages() {
		return $this->belongsToMany(SpaceUsage::class);
	}

	public function messageTemplates() {
		return $this->hasOne(MessageTemplate::class);
	}
}