<?php

namespace Tests\Unit;

use Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FacilityControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    // public function setUp() {
    //     parent::setUp();

    //     Artisan::call('db:seed');
    // }

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
}