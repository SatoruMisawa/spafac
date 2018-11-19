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
        $data = $this->data();
        $this->assertPostRequestToCreateFacility($data);
        $this->assertAddressInDB($data);
        $this->assertFacilityInDB($data);
    }

    private function assertPostRequestToCreateFacility($data) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser()
        ->post(route('host.facility.create'), $data)
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
        $data = $this->data();
        $this->assertPutRequestToUpdateFacility($data, $facility->id);
        $this->assertAddressInDB($data);
        $this->assertFacilityInDB($data);
    }

    private function assertPutRequestToUpdateFacility($data, $facilityID) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser()
        ->put(route('host.facility.update', $facilityID), $data)
        ->assertRedirect(route('host.facility.index'));
    }

    private function assertAddressInDB($data) {
        $this->assertDatabaseHas('addresses', [
            'zip' => $data['zip'],
            'prefecture_id' => $data['prefecture_id'],
            'address1' => $data['address1'],
            'address1_ruby' => $data['address1_ruby'],
            'address2' => $data['address2'],
            'address2_ruby' => $data['address2_ruby'],
            'address3' => $data['address3'],
            'address3_ruby' => $data['address3_ruby'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
        ]);
    }

    private function assertFacilityInDB($data) {
        $this->assertDatabaseHas('facilities', [
            'name' => $data['name'],
            'access' => $data['access'],
            'tel' => $data['tel'],
            'facility_kind_id' => $data['facility_kind_id'],
        ]);
    }

    private function data() {
        return [
            'name' => $this->faker->word(),
            'zip' => '0000000',
            'prefecture_id' => $this->faker->numberBetween(0, 46),
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
            'facility_kind_id' => $this->faker->numberBetween(0, 5),
        ];
    }
}