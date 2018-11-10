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
    
    public function testCreate()
    {
        $data = $this->data();
        $user = $this->repository()->create($data);
        $this->assert($data, $user);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(User::class, $actual);
        $this->assertEquals($expect['name'], $actual->name);
        $this->assertEquals($expect['nickname'], $actual->nickname);
        $this->assertEquals($expect['email'], $actual->email);
        $this->assertEquals($expect['tel'], $actual->tel);
        $this->assertTrue(Hash::check($expect['password'], $actual->password));
    }

    private function repository() {
        return app()->make(UserRepository::class);
    }

    private function data() {
        return [
            'name' => $this->faker->userName(),
            'nickname' => $this->faker->userName(),
            'email' => $this->faker->email(),
            'tel' => $this->faker->phoneNumber(),
            'password' => $this->faker->password(),
        ];
    }
}