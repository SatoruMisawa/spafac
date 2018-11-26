<?php

namespace App;

class Guest extends User {
    public function applies() {
        return $this->hasMany(Apply::class, 'guest_id');
    }

    public function applyHourlyPlan(Plan $plan, int $hours) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}

        $this->applies()->create([
			'host_id' => $plan->planner()->id,
			'plan_id' => $plan->id,
			'price' => $plan->price_per_hour * $hours,
		]);
	}

	public function applyDaylyPlan(Plan $plan) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}
        
        $this->applies()->create([
            'host_id' => $plan->planner()->id,
			'plan_id' => $plan->id,
			'price' => $plan->price_per_day,
        ]);
	}
}