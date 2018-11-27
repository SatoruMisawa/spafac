<?php

namespace App;

class Host extends User {
	protected $table = 'users';
	
    public function applies() {
        return $this->hasMany(Apply::class, 'host_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class, 'host_id');
    }

    public function ownApply(Apply $apply) {
        return $this->isSameAs($apply->host);
    }

    public function approve(Apply $apply) {
		if (!$this->isSameAs($apply->plan->planner())) {
			return;
		}

        return $this->reservations()->create([
            'guest_id' => $apply->guest->id,
			'apply_id' => $apply->id,
        ]);
    }

    public function chargeFor(Reservation $reservation) {
		$this->feeCollector->setPrice($reservation->apply->price);
		$charge = $this->claimant->charge([
			'guest_price_with_fee' => $this->feeCollector->calculateGuestPriceWithFee(),
			'host_reward' => $this->feeCollector->calculateHostReward(),
			'customer' => $reservation->guest->claimantUser->claimant_customer_id,
			'destination' => $this->claimantUser->claimant_account_id,
		]);
		
		$reservation->getCharged();

		$chargeHistory = $reservation->guest->chargeHistories()->create([
			'reservation_id' => $reservation->id,
		]);

		$chargeHistory->claimantChargeHistory()->create([
			'claimant_charge_history_id' => $charge->id,
		]);
	}
}