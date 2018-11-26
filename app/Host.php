<?php

namespace App;

class Host extends User {
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

        $this->reservations()->create([
            'guest_id' => $apply->guest->id,
			'apply_id' => $apply->id,
        ]);
	}
}