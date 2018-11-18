<?php

namespace Tests\Feature;

use App\Space;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function  testNew() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.space.plan.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規プラン');
    }

    public function testCreate() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.space.plan.create', $space->id), [
                            'name' => $this->faker->word(),
			                'preorder_deadline_id' => $this->faker->randomDigitNotNull(),
                            'preorder_period_id' => $this->faker->randomDigitNotNull(),
                            'by_hour' => $this->faker->boolean(),
                            'by_day' => $this->faker->boolean(),
			                'price_per_hour' => $this->faker->numberBetween(0, 9999),
                            'price_per_day' => $this->faker->numberBetween(0, 99999),
                            'day_ids' => [1,2,3],
                            'hour_from' => [1 => 1, 2 => 3, 3 => 5],
                            'hour_to' => [1 => 4, 2 => 6, 3 => 8],
			                'need_to_be_approved' => $this->faker->boolean(),
			                'from' => $this->faker->dateTime(),
			                'to' => $this->faker->dateTime(),
                        ])
                        ->assertRedirect(route('host.space.option.new', $space->id));
    }
}