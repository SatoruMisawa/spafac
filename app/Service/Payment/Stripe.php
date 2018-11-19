<?php

namespace App\Service;

use Stripe\Account;
use Stripe\Charge;

class Stripe implements Claimant {
    public function charge($params = []) {
        if (!$this->validateToCharge($params)) {
            return;
        }

        return Charge::create([
			'amount' => $params['amount'],
			'currency' => "JPY",
			'source' => $params['source'],
			'destination' => [
			  'account' => $params['dst_account_id'],
			],
		]);
    }

    private function validateToCharge($params) {
        if ($params['amount'] <= 0) {
            return false;
        }

        if ($params['source'] === '') {
            return false;
        }

        if ($params['dst_account_id'] === '') {
            return false;
        }

        return true;
    }

    public function createAccount($params = []) {
        if (!$this->validateToCreateAccount($params)) {
            return;
        }
        
        return Account::create([
            'country' => $params['country'],
            'type' => $params['type'],
        ]);
    }

    private function validateToCreateAccount($params) {
        if ($params['country'] === '') {
            return false;
        }

        if ($params['type'] === '') {
            return false;
        }

        return true;
    }

    public function connectBankAccount($params = []) {
        if (!$this->validateToConnectBankAccount($params)) {
            return;
        }
        
        $account = Account::retrieve($params['account_id']);
        $account->external_accounts->create([
            'external_account' => $params['bank_account_id'],
        ]);
    }

    private function validateToConnectBankAccount($params) {
        if ($params['account_id'] === '') {
            return false;
        }

        if ($params['bank_account_id'] === '') {
            return false;
        }

        return true;
    }
}