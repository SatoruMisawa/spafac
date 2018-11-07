<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    public function testNew()
    {
        $response = $this->loginWithTesterIfDebug()
                         ->get(route('user.new'));

        $response->assertStatus(200)
                 ->assertSee('新規会員登録');
    }
}