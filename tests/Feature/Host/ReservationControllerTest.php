<?php

namespace Tests\Feature\Host;

use App\Reservation;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservationControllerTest extends TestCase
{
    public function testIndex() {
        $reservation = factory(Reservation::class)->create();
        $this->assertGetRequestToShowReservationIndex($reservation);
    }

    private function assertGetRequestToShowReservationIndex(Reservation $reservation) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser($reservation->host)
        ->get(route('host.reservation.index'))
        ->assertStatus(200)
        ->assertSee('reservation: '.$reservation->id);
    }
}