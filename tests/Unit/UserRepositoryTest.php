<?php

namespace Tests\Unit;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Reqeusts\CreateUserRequest;
use Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRepositoryTest extends TestCase
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
            'name' => $this->faker->userName(),
            'nickname' => $this->faker->userName(),
            'email' => $this->faker->email(),
            'tel' => $this->faker->phoneNumber(),
            'password' => $this->faker->password(),
        ];
        $repo = new UserRepository(new User);
        $user = $repo->create($data);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);
        $this->assertEquals($data['nickname'], $user->nickname);
        $this->assertEquals($data['email'], $user->email);
        $this->assertEquals($data['tel'], $user->tel);
        $this->assertTrue(Hash::check($data['password'], $user->password));
    }
}