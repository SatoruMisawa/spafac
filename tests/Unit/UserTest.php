<?php

namespace Tests\Unit;

use App\Apply;
use App\Plan;
use App\Reservation;
use App\User;
use App\Mocks\User as MockUser;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    
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