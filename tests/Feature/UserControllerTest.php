<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $response = $this->loginWithTesterIfDebug()
                         ->get(route('user.new'));

        $response->assertStatus(200)
                 ->assertSee('新規会員登録');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $response = $this->loginWithTesterIfDebug()
                         ->post(route('user.create'), [
                             'name' => $this->faker->name(),
                             'nickname' => $this->faker->name(),
                             'email' => $this->faker->email(),
                             'tel' => '000000000',
                             'password' => 'aaaaaaaaaaaaaaa',
                             'password_confirmation' => 'aaaaaaaaaaaaaaa',
                         ])
                         ->assertRedirect(route('verification.email.send', 1));
    }
}