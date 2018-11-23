<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
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
                 ->assertSee('アカウント新規登録');
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
            'family_name' => $data['family_name'],
            'given_name' => $data['given_name'],
            'email' => $data['email'],
            'profile_image_url' => config('app.url').'/storage/'.$data['profile_image']->hashName(),
        ]);

        $user = User::find(1);
        $this->assertTrue(Hash::check($data['password'], $user->password));
    }

    private function data() {
        return [
            'family_name' => $this->faker->name(),
            'given_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => 'aaaaaaaaaaaaaaa',
            'password_confirmation' => 'aaaaaaaaaaaaaaa',
            'profile_image' => UploadedFile::fake()->image('test.png'),
        ];
    }
}