<?php

namespace Tests\Unit;

use App\Apply;
use App\Reservation;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HostTest extends TestCase
{
    use RefreshDatabase;

    public function testApprove() {
        $apply = factory(Apply::class)->create();
        $host = $apply->plan->planner()->asHost();
        $host->approve($apply);
        $this->assertDatabaseHas('reservations', [
            'host_id' => $host->id,
            'guest_id' => $apply->guest->id,
            'apply_id' => $apply->id,
        ]);
    }

    public function testChargeFor() {
        $reservation = factory(Reservation::class)->create();
        $reservation->host->chargeFor($reservation);
        $this->assertDatabaseHas('reservations', [
            'id' => $reservation->id,
            'is_charged' => true,
        ]);
        $this->assertDatabaseHas('charge_histories', [
            'user_id' => $reservation->guest->id,
            'reservation_id' => $reservation->id,
        ]);
    }
}