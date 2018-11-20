<?php

namespace Tests\Feature;

use App\Plan;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OptionControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $plan = factory(Plan::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser(User::find($plan->space->user_id))
                        ->get(route('host.space.plan.option.new', [$plan->space->id, $plan->id]));
        $response->assertStatus(200)
                ->assertSee('新規オプション');
    }

    public function testCreate() {
        try {
            $plan = factory(Plan::class)->create();
            $data = $this->data();
            $this->assertPostRequestToCreateOptions($data, $plan);
            $this->assertOptionsInDB($data, $plan->id);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    private function data() {
        return [
            'options' => [
                [
                    'name' => $this->faker->name(),
                    'description' => $this->faker->sentence(),
                    'price' => $this->faker->numberBetween(1, 9999),
                ],
                [
                    'name' => $this->faker->name(),
                    'description' => $this->faker->sentence(),
                    'price' => $this->faker->numberBetween(1, 9999),
                ],
            ],
        ];
    }

    private function assertPostRequestToCreateOptions($data, Plan $plan) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser(User::find($plan->space->user_id))
                    ->post(route('host.space.plan.option.create', [$plan->space->id, $plan->id]), $data)
                    ->assertRedirect(route('host.space.messagetemplate.new', $plan->space->id));
    }

    private function assertOptionsInDB($data, $planID) {
        foreach ($data['options'] as $option) {
            $this->assertDatabaseHas('options', [
                'plan_id' => $planID,
                'name' => $option['name'],
                'description' => $option['description'],
                'price' => $option['price'],
            ]);
        }
    }
}