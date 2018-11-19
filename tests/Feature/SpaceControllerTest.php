<?php

namespace Tests\Feature;

use App\Facility;
use App\Space;
use App\User;
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
                        ->loginWithUser(User::find($facility->user_id))
                        ->get(route('host.facility.space.new', $facility->id));

        $response->assertStatus(200)
                ->assertSee('新規スペース');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $facility = factory(Facility::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreateSpace($data, $facility);
        $this->assertSpaceInDB($data, $facility->id);
        $this->assertAmenitiesInDB($data);
        $this->assertSpaceUsagesInDB($data);
    }

    private function assertPostRequestToCreateSpace($data, Facility $facility) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser(User::find($facility->user_id))
        ->post(route('host.facility.space.create', $facility->id), $data)
        ->assertRedirect(route('host.space.image.new', 1));
    }

    public function testEdit() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser(User::find(Facility::find($space->facility_id)->user_id))
                        ->get(route('host.facility.space.edit', [$space->facility_id, $space->id]));

        $response->assertStatus(200)
                 ->assertSee('スペース編集');
    }

    public function testUpdate() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPutRequestToUpdateSpace($data, $space);
        $this->assertSpaceInDB($data, $space->facility_id);
        $this->assertAmenitiesInDB($data);
        $this->assertSpaceUsagesInDB($data);
    }

    private function assertPutRequestToUpdateSpace($data, Space $space) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser(User::find(Facility::find($space->facility_id)->user_id))
        ->put(route('host.facility.space.update', [$space->facility_id, $space->id]), $data)
        ->assertRedirect(route('host.space.index'));
    }

    private function assertSpaceInDB($data, $facilityID) {
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

    private function assertAmenitiesInDB($data) {
        foreach ($data['amenity_ids'] as $amenityID) {
            $this->assertDatabaseHas('amenity_space', [
                'space_id' => 1,
                'amenity_id' => $amenityID,
            ]);
        }
    }

    private function assertSpaceUsagesInDB($data) {
        foreach ($data['space_usage_ids'] as $spaceUsageID) {
            $this->assertDatabaseHas('space_space_usage', [
                'space_id' => 1,
                'space_usage_id' => $spaceUsageID,
            ]);
        }
    }

    private function data() {
        return [
            'name' => $this->faker->name(),
            'about' => $this->faker->sentence(),
            'space_usage_ids' => [
                $this->faker->numberBetween(1, 3),
                $this->faker->numberBetween(1, 3),
            ],
            'capacity' => $this->faker->randomDigitNotNull(),
            'floor_area' => $this->faker->randomDigitNotNull(),
            'key_delivery_id' => $this->faker->numberBetween(1, 3),
            'amenity_ids' => [
                $this->faker->numberBetween(1, 5),
                $this->faker->numberBetween(1, 5),
            ],
            'about_amenity' => $this->faker->sentence(),
            'about_food_drink' => $this->faker->sentence(),
            'about_cleanup' => $this->faker->sentence(),
            'cancellation_policy' => $this->faker->sentence(),
            'terms_of_use' => $this->faker->sentence(),
        ];
    }
}