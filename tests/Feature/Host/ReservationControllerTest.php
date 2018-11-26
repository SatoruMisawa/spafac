<?php

namespace Tests\Feature\Host;

use App\Apply;
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

    public function testCreate() {
        $apply = factory(Apply::class)->create();
        $data = $this->data($apply->id);
        $this->assertPostRequestToCreate($data, $apply);
        $this->assertReservationInDB($data, $apply);
    }

    private function data($applyID) {
        return [
            'apply_id' => $applyID,
        ];
    }

    private function assertPostRequestToCreate($data, Apply $apply) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser($apply->host)
        ->post(route('host.reservation.create'), $data)
        ->assertRedirect(route('host.reservation.index'));
    }

    private function assertReservationInDB($data, Apply $apply) {
        $this->assertDatabaseHas('reservations', [
            'host_id' => $apply->plan->planner()->id,
            'guest_id' => $apply->guest->id,
            'apply_id' => $data['apply_id'],
        ]);
    }
}