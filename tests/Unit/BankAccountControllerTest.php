<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BankAccountControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.bankaccount.new'));

        $response->assertStatus(200)
                ->assertSee('新規銀行口座');
    }

    public function testCreate() {
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.bankaccount.create', [
                            'bank_name' => $this->faker->name(),
                            'bank_code' => $this->faker->numberBetween(100, 999),
                            'branch_name' => $this->faker->name(),
                            'branch_code' => $this->faker->numberBetween(100, 999),
                            'account_number' => $this->faker->bankAccountNumber(),
                            'account_holder' => $this->faker->name(),
                            'stripe_bank_account_id' => $this->faker->numberBetween(10000, 99999),
                        ]))
                        ->assertRedirect(route('host.index'));
    }
}