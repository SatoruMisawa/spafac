<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testNew() {
        $response = $this->loginWithTesterIfDebug()
                         ->get(route('user.new'));

        $response->assertStatus(200)
                 ->assertSee('新規会員登録');
    }

    public function testCreate() {
        $response = $this->loginWithTesterIfDebug()
                         ->post(route('user.create'), [
                             'name' => 'aiueo',
                             'nickname' => 'aiueo',
                             'email' => 'aiueo@aiueo.com',
                             'tel' => '000000000',
                             'password' => 'aaaaaaaaaaaaaaa',
                             'password_confirmation' => 'aaaaaaaaaaaaaaa',
                         ])
                         ->assertRedirect(route('verification.email.send', 1));
    }
}