<?php

namespace Tests\Unit;

use App\BankAccount;
use App\Repositories\BankAccountRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BankAccountRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $data = $this->data();
        $bankAccount = $this->repository()->new($data);
        $this->assert($data, $bankAccount);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(BankAccount::class, $actual);
        if (isset($expect['id'])) {
            $this->assertEquals($expect['id'], $actual->id);    
        }
        $this->assertEquals($expect['user_id'], $actual->user_id);
        $this->assertEquals($expect['bank_name'], $actual->bank_name);
        $this->assertEquals($expect['bank_code'], $actual->bank_code);
        $this->assertEquals($expect['branch_name'], $actual->branch_name);
        $this->assertEquals($expect['branch_code'], $actual->branch_code);
        $this->assertEquals($expect['account_number'], $actual->account_number); 
        $this->assertEquals($expect['account_holder'], $actual->account_holder); 
    }

    private function repository() {
        return app()->make(BankAccountRepository::class);
    }

    private function data() {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'bank_name' => $this->faker->name(),
            'bank_code' => $this->faker->numberBetween(100, 999),
            'branch_name' => $this->faker->name(),
            'branch_code' => $this->faker->numberBetween(100, 999),
            'account_number' => $this->faker->bankAccountNumber(),
            'account_holder' => $this->faker->name(),
        ];
    }
}