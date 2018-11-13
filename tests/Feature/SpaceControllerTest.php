<?php

namespace Tests\Feature;

use App\Facility;
use App\Space;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $facility = factory(Facility::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.facility.space.new', $facility->id));

        $response->assertStatus(200)
                ->assertSee('新規スペース');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $facility = factory(Facility::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.facility.space.create', $facility->id), [
                            'space_usage_ids' => [
                                $this->faker->randomDigitNotNull(),
                                $this->faker->randomDigitNotNull(),
                            ],
                            'capacity' => $this->faker->randomDigitNotNull(),
                            'floor_area' => $this->faker->randomDigitNotNull(),
                            'key_delivery_id' => $this->faker->randomDigitNotNull(),
                        ])
                        ->assertRedirect(route('host.space.image.new', 1));
    }

    public function testEdit() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.facility.space.edit', [$space->facility_id, $space->id]));

        $response->assertStatus(200)
                 ->assertSee('スペース編集');
    }

    public function testUpdate() {
        $space = factory(Space::class)->create();
        $updatedSpace = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->put(route('host.facility.space.update', [$space->facility_id, $space->id]), [
                            'key_delivery_id' => $updatedSpace->key_delivery_id,
                            'space_usage_ids' => [1,2],
                            'capacity' => $updatedSpace->capacity,
                            'floor_area' => $updatedSpace->floor_area,
                        ])
                        ->assertRedirect(route('host.space.index'));
    }
}