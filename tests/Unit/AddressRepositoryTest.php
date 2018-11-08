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
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $data = [
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

        $repo = new AddressRepository(new Address);
        $address = $repo->create($data);

        $this->assertInstanceOf(Address::class, $address);
        $this->assertEquals($data['prefecture_id'], $address->prefecture_id);
        $this->assertEquals($data['zip'], $address->zip);
        $this->assertEquals($data['address1'], $address->address1);
        $this->assertEquals($data['address1_ruby'], $address->address1_ruby);
        $this->assertEquals($data['address2'], $address->address2);
        $this->assertEquals($data['address2_ruby'], $address->address2_ruby);
        $this->assertEquals($data['address3'], $address->address3);
        $this->assertEquals($data['address3_ruby'], $address->address3_ruby);
        $this->assertEquals($data['latitude'], $address->latitude);
        $this->assertEquals($data['longitude'], $address->longitude);
    }
}