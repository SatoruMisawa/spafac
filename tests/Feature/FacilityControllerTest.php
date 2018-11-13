<?php

namespace Tests\Feature;

use Artisan;
use App\Facility;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FacilityControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.facility.new'));

        $response->assertStatus(200)
                 ->assertSee('新規スペース');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.facility.create'), [
                            'name' => $this->faker->word(),
                            'zip' => '0000000',
                            'prefecture_id' => 1,
                            'address1' => $this->faker->city(),
                            'address1_ruby' => $this->faker->city(),
                            'address2' => $this->faker->streetAddress(),
                            'address2_ruby' => $this->faker->streetAddress(),
                            'address3' => $this->faker->buildingNumber(),
                            'address3_ruby' => $this->faker->buildingNumber(),
                            'latitude' => $this->faker->latitude(),
                            'longitude' => $this->faker->longitude(),
                            'access' => $this->faker->sentence(),
                            'tel' => '00000000000',
                            'facility_kind_id' => 1,
                        ])
                        ->assertRedirect(route('host.facility.space.new', 1));
    }

    public function testEdit() {
        $facility = factory(Facility::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.facility.edit', $facility->id));

        $response->assertStatus(200)
                 ->assertSee('施設編集');
    }

    public function testUpdate() {
        $facility = factory(Facility::class)->create();
        $updatedFacility = factory(Facility::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->put(route('host.facility.update', $facility->id), [
                            'name' => $updatedFacility->name,
                            'zip' => '0000000',
                            'prefecture_id' => $updatedFacility->address->prefecture_id,
                            'address1' => $updatedFacility->address->address1,
                            'address1_ruby' => $updatedFacility->address->address1_ruby,
                            'address2' => $updatedFacility->address->address2,
                            'address2_ruby' => $updatedFacility->address->address2_ruby,
                            'address3' => $updatedFacility->address->address3,
                            'address3_ruby' => $updatedFacility->address->address3_ruby,
                            'latitude' => $updatedFacility->address->latitude,
                            'longitude' => $updatedFacility->address->longitude,
                            'access' => $updatedFacility->access,
                            'tel' => '00000000000',
                            'facility_kind_id' => $updatedFacility->facility_kind_id,
                        ])
                        ->assertRedirect(route('host.facility.index'));
    }
}