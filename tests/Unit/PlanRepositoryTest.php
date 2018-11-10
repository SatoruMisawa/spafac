<?php

namespace Tests\Unit;

use App\Plan;
use App\Repositories\PlanRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    
    public function testNew() {
        $data = $this->data();
        $plan = $this->repository()->new($data);
        $this->assert($data, $plan);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(Plan::class, $actual);
        if (isset($expect['id'])) {
            $this->assertEquals($expect['id'], $actual->id);    
        }
        $this->assertEquals($expect['name'], $actual->name);
        $this->assertEquals($expect['preorder_deadline_id'], $actual->preorder_deadline_id);
        $this->assertEquals($expect['preorder_period_id'], $actual->preorder_period_id);
        $this->assertEquals($expect['price_per_hour'], $actual->price_per_hour);
        $this->assertEquals($expect['price_per_day'], $actual->price_per_day);
        $this->assertEquals($expect['need_to_be_approved'], $actual->need_to_be_approved);
        $this->assertEquals($expect['from'], $actual->from);
        $this->assertEquals($expect['to'], $actual->to);
    }

    private function repository() {
        return app()->make(PlanRepository::class);
    }

    private function data() {
        return [
            'name' => $this->faker->word(),
			'preorder_deadline_id' => $this->faker->randomDigitNotNull(),
            'preorder_period_id' => $this->faker->randomDigitNotNull(),
			'price_per_hour' => $this->faker->numberBetween(0, 9999),
            'price_per_day' => $this->faker->numberBetween(0, 99999),
			'need_to_be_approved' => $this->faker->boolean(),
			'from' => $this->faker->dateTime(),
		    'to' => $this->faker->dateTime(),
        ];
    }
}