<?php

namespace Tests\Feature\Guest;

use App\Option;
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
        $this->loginWithTesterIfDebug()->loginWithUser();
        $plan = factory(Plan::class)->create();
        $case = $this->caseOfCreatingApplyToDailyPlan($plan);
        $this->assertPostToCreateApply($case['data']);
        $this->assertApplyToDailyPlanInDB($case['expect']);
    }

    public function caseOfCreatingApplyToDailyPlan(Plan $plan) {
        return [
            'data' => [
                'plan_id' => $plan->id,
                'by_day' => true,
                'by_hour' => false,
                'option_ids' => [],
                'option_counts' => [],
            ],
            'expect' => [
                'guest_id' => Auth::guard('users')->user()->id,
                'host_id' => $plan->planner()->id,
                'plan_id' => $plan->id,
                'price' => $plan->price_per_day,
            ]
        ];
    }

    public function assertApplyToDailyPlanInDB($expect) {
        $this->assertDatabaseHas('applies', $expect);
    }

    public function testCreateApplyToHourlyPlan() {
        $this->loginWithTesterIfDebug()->loginWithUser();
        $plan = factory(Plan::class)->create();
        $case = $this->caseOfCreatingApplyToHourlyPlan($plan);
        $this->assertPostToCreateApply($case['data']);
        $this->assertApplyToHourlyPlanInDB($case['expect']);
    }

    private function caseOfCreatingApplyToHourlyPlan(Plan $plan) {
        $option1 = factory(Option::class)->create();
        $option2 = factory(Option::class)->create();
        return [
            'data' => [
                'plan_id' => $plan->id,
                'by_day' => false,
                'by_hour' => true,
                'hours' => 5,
                'option_ids' => [
                    $option1->id,
                    $option2->id,
                ],
                'option_counts' => [
                    $option1->id => 3,
                    $option2->id => 2,
                ],
            ],
            'expect' => [
                'guest_id' => Auth::guard('users')->user()->id,
                'host_id' => $plan->planner()->id,
                'plan_id' => $plan->id,
                'price' => $plan->price_per_hour * 5 + $option1->price * 3 + $option2->price * 2,
            ]
        ];
    }

    private function assertPostToCreateApply($data) {
        return $this->post(route('guest.apply.create'), $data)
        ->assertRedirect(route('guest.apply.index'));
    }

    private function assertApplyToHourlyPlanInDB($expect) {
        $this->assertDatabaseHas('applies', $expect);
    }
}