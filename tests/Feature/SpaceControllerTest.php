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
        $data = $this->data();
        $this->assertPostCreateSpaceRequest($facility->id, $data);
        $this->assertSpaceInDB($facility->id, $data);
    }

    private function assertPostCreateSpaceRequest($facilityID, $data) {
        return $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.facility.space.create', $facilityID), $data)
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
        $data = $this->data();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->put(route('host.facility.space.update', [$space->facility_id, $space->id]), $data)
                        ->assertRedirect(route('host.space.index'));
    }

    private function assertSpaceInDB($facilityID, $data) {
        $this->assertDatabaseHas('spaces', [
            'facility_id' => $facilityID,
            'name' => $data['name'],
            'about' => $data['about'],
            'key_delivery_id' => $data['key_delivery_id'],
            'capacity' => $data['capacity'],
            'floor_area' => $data['floor_area'],
            'about_amenity' => $data['about_amenity'],
            'about_food_drink' => $data['about_food_drink'],
            'about_cleanup' => $data['about_cleanup'],
            'cancellation_policy' => $data['cancellation_policy'],
            'terms_of_use' => $data['terms_of_use'],
        ]);
    }

    private function data() {
        return [
            'name' => $this->faker->name(),
            'about' => $this->faker->sentence(),
            'space_usage_ids' => [
                $this->faker->randomDigitNotNull(),
                $this->faker->randomDigitNotNull(),
            ],
            'capacity' => $this->faker->randomDigitNotNull(),
            'floor_area' => $this->faker->randomDigitNotNull(),
            'key_delivery_id' => $this->faker->randomDigitNotNull(),
            'amenity_ids' => [
                $this->faker->randomDigitNotNull(),
                $this->faker->randomDigitNotNull(),
            ],
            'about_amenity' => $this->faker->sentence(),
            'about_food_drink' => $this->faker->sentence(),
            'about_cleanup' => $this->faker->sentence(),
            'cancellation_policy' => $this->faker->sentence(),
            'terms_of_use' => $this->faker->sentence(),
        ];
    }
}