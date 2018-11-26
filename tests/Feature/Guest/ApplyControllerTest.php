<?php

namespace Tests\Feature\Guest;

use App\Plan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Auth;

class ApplyControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testCreateApplyToDailyPlan() {
        $plan = factory(Plan::class)->create();
        $data = $this->dataToCreateApplyToDailyPlan($plan->id);
        $this->assertPostToCreateApply($data);
        $this->assertApplyToDailyPlanInDB($data, $plan);
    }

    public function dataToCreateApplyToDailyPlan($planID) {
        return [
            'plan_id' => $planID,
            'by_day' => true,
            'by_hour' => false,
        ];
    }

    public function assertApplyToDailyPlanInDB($data, Plan $plan) {
        $this->assertDatabaseHas('applies', [
            'guest_id' => Auth::guard('users')->user()->id,
            'host_id' => $plan->planner()->id,
            'plan_id' => $data['plan_id'],
        ]);
    }

    public function testCreateApplyToHourlyPlan() {
        $plan = factory(Plan::class)->create();
        $data = $this->dataToCreateApplyToHourlyPlan($plan->id);
        $this->assertPostToCreateApply($data);
        $this->assertApplyToHourlyPlanInDB($data, $plan);
    }

    private function dataToCreateApplyToHourlyPlan($planID) {
        return [
            'plan_id' => $planID,
            'by_day' => false,
            'by_hour' => true,
            'hours' => $this->faker->numberBetween(1, 22),
        ];
    }

    private function assertPostToCreateApply($data) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser()
        ->post(route('guest.apply.create'), $data)
        ->assertRedirect(route('guest.apply.index'));
    }

    private function assertApplyToHourlyPlanInDB($data, Plan $plan) {
        $this->assertDatabaseHas('applies', [
            'guest_id' => Auth::guard('users')->user()->id,
            'host_id' => $plan->planner()->id,
            'plan_id' => $data['plan_id'],
            'price' => $plan->price_per_hour * $data['hours'],
        ]);
    }
}