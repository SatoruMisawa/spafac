<?php

namespace App;

class Guest extends User {
	protected $table = 'users';

    public function applies() {
        return $this->hasMany(Apply::class, 'guest_id');
	}
	
	public function reservations() {
		return $this->hasMany(Reservation::class, 'guest_id');
	}

    public function applyHourlyPlan(Plan $plan, int $hours, $options = [], array $optionCounts = []) {
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

	public function applyDailyPlan(Plan $plan, $options = [], array $optionCounts = []) {
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

	private function sumOptionPrice($options, array $optionCounts) {
		$price = 0;
		foreach ($options as $option) {
			$price += $option->price * $optionCounts[$option->id];
		}

		return $price;
	}

	private function createRelationshipToApply(array $data) {
		return $this->applies()->create($data);
	}

	public function connectClaimantCustomer($source) {
		$claimantCustomer = $this->claimant->connectCustomer([
			'email' => $this->email,
			'source' => $source,
		]);
		
		if ($this->claimantUser === null) {
			$this->claimantUser()->create([
				'claimant_customer_id' => $claimantCustomer->id,
			]);
			return;	
		}

		$this->claimantUser->update([
			'claimant_customer_id' => $claimantCustomer->id,
		]);
	}

	public function ownApply(Apply $apply) {
		return $this->isSameAs($apply->guest);
	}
}