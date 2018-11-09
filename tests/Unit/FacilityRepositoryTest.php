<?php

namespace Tests\Unit;

use App\Facility;
use App\User;
use App\Repositories\FacilityRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FacilityRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $this->refreshAndSeedDatabase();
        $data = $this->data();
        $facility = $this->repository()->new($data);
        $this->assert($data, $facility);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(Facility::class, $actual);
        $this->assertEquals($expect['user_id'], $actual->user_id);
        $this->assertEquals($expect['address_id'], $actual->address_id);
        $this->assertEquals($expect['facility_kind_id'], $actual->facility_kind_id);
        $this->assertEquals($expect['name'], $actual->name);
        $this->assertEquals($expect['access'], $actual->access);
        $this->assertEquals($expect['tel'], $actual->tel); 
    }

    private function repository() {
        return app()->make(FacilityRepository::class);
    }

    private function data() {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'address_id' => $this->faker->randomDigitNotNull(),
			'facility_kind_id' => $this->faker->randomDigitNotNull(),
			'name' => $this->faker->name(),
			'access' => $this->faker->sentence(),
			'tel' => $this->faker->phoneNumber(),
        ];
    }
}