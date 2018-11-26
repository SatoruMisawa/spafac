<?php

namespace App;

class Guest extends User {

    public function applies() {
        return $this->hasMany(Apply::class, 'guest_id');
	}
	
	public function reservations() {
		return $this->hasMany(Reservation::class, 'guest_id');
	}

    public function applyHourlyPlan(Plan $plan, int $hours, array $options = [], array $optionCounts = []) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}

		$optionPrice = $this->sumOptionPrice($options, $optionCounts);

        $apply = $this->createRelationshipToApply([
			'host_id' => $plan->planner()->id,
			'plan_id' => $plan->id,
			'price' => $plan->price_per_hour * $hours + $optionPrice,
		]);

		$apply->addRelationshipToOptions($options, $optionCounts);
	}

	public function applyDailyPlan(Plan $plan, array $options = [], array $optionCounts = []) {
		if ($this->isSameAs($plan->planner())) {
			return;
		}
		if ($plan->isAlreadyApplied()) {
			return;
		}

		$optionPrice = $this->sumOptionPrice($options, $optionCounts);

        $apply = $this->createRelationshipToApply([
            'host_id' => $plan->planner()->id,
			'plan_id' => $plan->id,
			'price' => $plan->price_per_day + $optionPrice,
		]);

		$apply->addRelationshipToOptions($options, $optionCounts);
	}

	private function sumOptionPrice(array $options, array $optionCounts) {
		$price = 0;
		foreach ($options as $option) {
			$price += $option['price'] * $optionCounts[$option['id']];
		}

		return $price;
	}

	private function createRelationshipToApply(array $data) {
		return $this->applies()->create($data);
	}

	public function ownApply(Apply $apply) {
		return $this->isSameAs($apply->guest);
	}
}