<?php

namespace Tests\Unit;

use App\Plan;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testApplyHourlyPlan() {
        $guest = factory(User::class)->create()->asGuest();
        $plan = factory(Plan::class)->create();
        $hours = $this->faker->numberBetween(1, 23);
        $guest->applyHourlyPlan($plan, $hours);
        $this->assertDatabaseHas('applies', [
            'guest_id' => $guest->id,
            'host_id' => $plan->planner()->id,
            'plan_id' => $plan->id,
            'price' => $plan->price_per_hour * $hours,
        ]);
    }

    public function testApplyDailyPlan() {
        $guest = factory(User::class)->create()->asGuest();
        $plan = factory(Plan::class)->create();
        $guest->applyDailyPlan($plan);
        $this->assertDatabaseHas('applies', [
            'guest_id' => $guest->id,
            'host_id' => $plan->planner()->id,
            'plan_id' => $plan->id,
            'price' => $plan->price_per_day,
        ]);
    }
}
