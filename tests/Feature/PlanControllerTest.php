<?php

namespace Tests\Feature;

use App\Space;
use App\User;
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
                        ->loginWithUser(User::find($space->user_id))
                        ->get(route('host.space.plan.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規プラン');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreatePlan($data, $space);
        $this->assertPlanInDB($data, $space->id);
        $this->assertSchedulesInDB($data, $space->id);
    }

    private function assertPostRequestToCreatePlan($data, Space $space) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser(User::find($space->user_id))
        ->post(route('host.space.plan.create', $space->id), $data)
        ->assertRedirect(route('host.space.plan.option.new', [$space->id, 1]));
    }

    private function assertPlanInDB($data, $spaceID) {
        $this->assertDatabaseHas('plans', [
            'space_id' => $spaceID,
            'name' => $data['name'],
            'preorder_deadline_id' => $data['preorder_deadline_id'],
            'preorder_period_id' => $data['preorder_period_id'],
            'price_per_hour' => $data['price_per_hour'],
            'price_per_day' => $data['price_per_day'],
            'need_to_be_approved' => $data['need_to_be_approved'],
            'from' => $data['from'],
            'to' => $data['to'],
        ]);
    }

    private function assertSchedulesInDB($data, $spaceID) {
        foreach ($data['day_ids'] as $dayID) {
            $this->assertDatabaseHas('schedules', [
                'plan_id' => 1,
                'day_id' => $dayID,
                'from' => $data['hour_from'][$dayID],
                'to' => $data['hour_to'][$dayID],
            ]);
        }
    }

    private function data() {
        return [
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
            'from' => $this->faker->date(),
            'to' => $this->faker->date(),
        ];
    }
}