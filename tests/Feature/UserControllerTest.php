<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Hash;

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
        $data = $this->data();
        $this->assertPostRequestToCreateUser($data);
        $this->assertUserInDB($data);
    }

    private function assertPostRequestToCreateUser($data) {
        return $this->loginWithTesterIfDebug()
        ->post(route('user.create'), $data)
        ->assertRedirect(route('verification.email.send', 1));
    }

    private function assertUserInDB($data) {
        $this->assertDatabaseHas('users', [
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'tel' => $data['tel'],
        ]);

        $user = User::find(1);
        $this->assertTrue(Hash::check($data['password'], $user->password));
    }

    private function data() {
        return [
            'name' => $this->faker->name(),
            'nickname' => $this->faker->name(),
            'email' => $this->faker->email(),
            'tel' => '000000000',
            'password' => 'aaaaaaaaaaaaaaa',
            'password_confirmation' => 'aaaaaaaaaaaaaaa',
        ];
    }
}