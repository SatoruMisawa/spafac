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
        $this->refreshAndSeedDatabase();
        $this->loginWithTesterIfDebug()->loginWithUser();
        $plan = factory(Plan::class)->create();
        $case = $this->caseOfCreatingApplyToDailyPlan($plan);
        $this->assertPostToCreateApply($case['data']);
        $this->assertApplyInDB($case['expectedApply']);
        $this->assertApplyOptionsInDB($case['expectedApplyOptions']);
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
            'expectedApply' => [
                'guest_id' => Auth::guard('users')->user()->id,
                'host_id' => $plan->planner()->id,
                'plan_id' => $plan->id,
                'price' => $plan->price_per_day,
            ],
            'expectedApplyOptions' => [],
        ];
    }

    public function testCreateApplyToHourlyPlan() {
        $this->refreshAndSeedDatabase();
        $this->loginWithTesterIfDebug()->loginWithUser();
        $plan = factory(Plan::class)->create();
        $case = $this->caseOfCreatingApplyToHourlyPlan($plan);
        $this->assertPostToCreateApply($case['data']);
        $this->assertApplyInDB($case['expectedApply']);
        $this->assertApplyOptionsInDB($case['expectedApplyOptions']);
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
            'expectedApply' => [
                'guest_id' => Auth::guard('users')->user()->id,
                'host_id' => $plan->planner()->id,
                'plan_id' => $plan->id,
                'price' => $plan->price_per_hour * 5 + $option1->price * 3 + $option2->price * 2,
            ],
            'expectedApplyOptions' => [
                [
                    'apply_id' => 1,
                    'option_id' => $option1->id,
                    'count' => 3,
                ],
                [
                    'apply_id' => 1,
                    'option_id' => $option2->id,
                    'count' => 2,
                ],
            ]
        ];
    }

    private function assertPostToCreateApply($data) {
        return $this->post(route('guest.apply.create'), $data)
        ->assertRedirect(route('guest.apply.index'));
    }

    public function assertApplyInDB($expect) {
        $this->assertDatabaseHas('applies', $expect);
    }

    private function assertApplyOptionsInDB($expects) {
        foreach ($expects as $expect) {
            $this->assertDatabaseHas('apply_option', $expect);
        }
    }
}