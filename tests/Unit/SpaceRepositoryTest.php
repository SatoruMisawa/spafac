<?php

namespace Tests\Feature;

use App\Space;
use App\Repositories\SpaceRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    
    public function testNew() {
        $data = $this->data();
        $space = $this->repository()->new($data);
        $this->assert($data, $space);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(Space::class, $actual);
        if (isset($expect['id'])) {
            $this->assertEquals($expect['id'], $actual->id);    
        }
        $this->assertEquals($expect['user_id'], $actual->user_id);
        $this->assertEquals($expect['facility_id'], $actual->facility_id);
        $this->assertEquals($expect['key_delivery_id'], $actual->key_delivery_id);
        $this->assertEquals($expect['capacity'], $actual->capacity);
        $this->assertEquals($expect['floor_area'], $actual->floor_area);
    }

    private function repository() {
        return app()->make(SpaceRepository::class);
    }

    private function data() {
        return [
            'user_id' => $this->faker->randomDigitNotNull(), 
            'facility_id' => $this->faker->randomDigitNotNull(),
            'key_delivery_id' => $this->faker->randomDigitNotNull(),  
            'capacity' => $this->faker->randomDigitNotNull(), 
            'floor_area' => $this->faker->randomDigitNotNull(),
        ];
    }
}