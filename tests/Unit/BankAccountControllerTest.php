<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BankAccountControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testNew() {
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.bankaccount.new'));

        $response->assertStatus(200)
                ->assertSee('新規銀行口座');
    }
}