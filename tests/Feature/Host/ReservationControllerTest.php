<?php

namespace Tests\Feature\Host;

use App\Apply;
use App\Reservation;
use App\User;
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
        $this->refreshAndSeedDatabase();
        $apply = factory(Apply::class)->create();
        $case = $this->caseOfCreatingReservation($apply);
        $this->assertPostRequestToCreate($case['data'], $apply->host);
        $this->assertReservationInDB($case['expectedReservation']);
        $this->assertChargeHistoryInDB($case['expectedChargeHistory']);
    }

    private function caseOfCreatingReservation(Apply $apply) {
        return [
            'data' => [
                'apply_id' => $apply->id,
            ],
            'expectedReservation' => [
                'host_id' => $apply->plan->planner()->id,
                'guest_id' => $apply->guest->id,
                'apply_id' => $apply->id,
            ],
            'expectedChargeHistory' => [
                'user_id' => $apply->guest->id,
                'reservation_id' => 1,
            ],
        ];
    }

    private function assertPostRequestToCreate($data, User $user) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser($user)
        ->post(route('host.reservation.create'), $data)
        ->assertRedirect(route('host.reservation.index'));
    }

    private function assertReservationInDB($data) {
        $this->assertDatabaseHas('reservations', $data);
    }

    private function assertChargeHistoryInDB($data) {
        $this->assertDatabaseHas('charge_histories', $data);
    }
}