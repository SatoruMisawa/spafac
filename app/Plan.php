<?php

namespace App;

use DB;
use Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
	protected $fillable = [
		'space_id', 'preorder_deadline_id', 'preorder_period_id',
		'name', 'price_per_hour', 'price_per_day',
		'need_to_be_approved',
		'from', 'to',
	];
	
	
	public function space() {
		return $this->belongsTo(Space::class);
	}

	public function schedules() {
		return $this->belongsToMany(Day::class, 'schedules');
	}

	public function planner() {
		return $this->space->user;
	}

	public function isAlreadyApplied() {
		return Apply::where('plan_id', $this->id)->exists();
	}

	public function isHourly() {
		return $this->price_per_hour !== null;
	}

	public function isDayly() {
		return $this->price_per_day !== null;
	}
}