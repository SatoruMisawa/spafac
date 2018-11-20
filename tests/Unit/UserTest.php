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
    
    public function testApplyHourlyPlan() {
        $user = factory(User::class)->create();
        $plan = factory(Plan::class)->create();
        $hours = $this->faker->numberBetween(1, 23);
        $user->applyHourlyPlan($plan, $hours);
        $this->assertDatabaseHas('applies', [
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'price' => $plan->price_per_hour * $hours,
        ]);
    }

    public function testApplyDaylyPlan() {
        $user = factory(User::class)->create();
        $plan = factory(Plan::class)->create();
        $user->applyDaylyPlan($plan);
        $this->assertDatabaseHas('applies', [
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'price' => $plan->price_per_day,
        ]);
    }

    public function testApprove() {
        $apply = factory(Apply::class)->create();
        $apply->plan->planner()->approve($apply);
        $this->assertDatabaseHas('reservations', [
            'host_id' => $apply->plan->planner()->id,
            'guest_id' => $apply->user->id,
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