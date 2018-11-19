<?php

namespace Tests\Feature;

use App\Space;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OptionControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser(User::find($space->user_id))
                        ->get(route('host.space.option.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規オプション');
    }

    public function testCreate() {
        try {
            $space = factory(Space::class)->create();
            $data = $this->data();
            $this->assertPostRequestToCreateOptions($data, $space);
            $this->assertOptionsInDB($data, $space->id);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    private function data() {
        return [
            'options' => [
                [
                    'name' => $this->faker->name(),
                    'price' => $this->faker->numberBetween(1, 9999),
                    'limit' => $this->faker->numberBetween(1, 99),
                ],
                [
                    'name' => $this->faker->name(),
                    'price' => $this->faker->numberBetween(1, 9999),
                    'limit' => null,
                ],
            ],
        ];
    }

    private function assertPostRequestToCreateOptions($data, Space $space) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser(User::find($space->user_id))
                    ->post(route('host.space.option.create', $space->id), $data)
                    ->assertRedirect(route('host.space.messagetemplate.new', $space->id));
    }

    private function assertOptionsInDB($data, $spaceID) {
        foreach ($data['options'] as $option) {
            $this->assertDatabaseHas('options', [
                'space_id' => $spaceID,
                'name' => $option['name'],
                'price' => $option['price'],
                'limit' => $option['limit'],
            ]);
        }
    }
}