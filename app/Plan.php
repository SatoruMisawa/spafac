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
		'name', 'description', 'price_per_hour', 'price_per_day',
		'need_to_be_approved',
		'from', 'to', 'max_expected_number_of_people', 'excess_charge_per_person',
		'min_number_of_nights', 'max_number_of_nights',
	];
	
	
	public function space() {
		return $this->belongsTo(Space::class);
	}

	public function schedules() {
		return $this->belongsToMany(Day::class, 'schedules')->withPivot('from', 'to');
	}

	public function schedulesToStay() {
		return $this->belongsToMany(Day::class, 'schedules_to_stay')->withPivot('checkin', 'checkout');
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

	public function isScheduled($dayID) {
		return $this->schedules()->where('day_id', $dayID)->exists();
	}

	public function schedule($dayID) {
		if (!$this->isScheduled($dayID)) {
			return null;
		}
		return $this->schedules()->where('day_id', $dayID)->first()->pivot;
	}

	public function hourFrom($dayID) {
		$schedule = $this->schedule($dayID);
		if ($schedule === null) {
			return null;
		}

		return $schedule->from;
	}

	public function hourTo($dayID) {
		$schedule = $this->schedule($dayID);
		if ($schedule === null) {
			return null;
		}

		return $schedule->to;
	}
}