<?php

namespace Tests\Unit;

use App\Address;
use App\Repositories\AddressRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddressRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    
    public function testFirst() {
        $address = factory(Address::class)->create();
        $address2 = $this->repository()->first([
            'id' => $address->id,
        ]);
        
        $this->assert($address->toArray(), $address2);
    }

    public function testFirstNull() {
        $address = $this->repository()->first([
            'id' => 0,
        ]);

        $this->assertEquals(null, $address);
    }

    public function testCreate() {
        $data = $this->data();
        $address = $this->repository()->create($data);

        $this->assert($data, $address);
    }

    public function testFirstOfFirstOrCreate() {
        $address = factory(Address::class)->create();
        $address2 = $this->repository()->firstOrCreate([
            'id' => $address->id,
        ]);

        $this->assert($address->toArray(), $address2);
    }

    public function testCreateOfFirstOrCreate() {
        $data = $this->data();
        $address = $this->repository()->firstOrCreate($data);

        $this->assert($data, $address);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(Address::class, $actual);
        $this->assertEquals($expect['prefecture_id'], $actual->prefecture_id);
        $this->assertEquals($expect['zip'], $actual->zip);
        $this->assertEquals($expect['address1'], $actual->address1);
        $this->assertEquals($expect['address1_ruby'], $actual->address1_ruby);
        $this->assertEquals($expect['address2'], $actual->address2);
        $this->assertEquals($expect['address2_ruby'], $actual->address2_ruby);
        $this->assertEquals($expect['address3'], $actual->address3);
        $this->assertEquals($expect['address3_ruby'], $actual->address3_ruby);
        $this->assertEquals($expect['latitude'], $actual->latitude);
        $this->assertEquals($expect['longitude'], $actual->longitude);
    }

    private function repository() {
        return app()->make(AddressRepository::class);
    }

    private function data() {
        return [
            'prefecture_id' => $this->faker->randomDigitNotNull(),
			'zip' => $this->faker->postcode(),
			'address1' => $this->faker->city(),
			'address1_ruby' => $this->faker->city(),
			'address2' => $this->faker->streetAddress(),
			'address2_ruby' => $this->faker->streetAddress(),
			'address3' => $this->faker->buildingNumber(),
			'address3_ruby' => $this->faker->buildingNumber(),
			'latitude' => $this->faker->latitude,
			'longitude' => $this->faker->longitude,
        ];
    }
}