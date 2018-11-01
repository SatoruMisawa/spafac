<?php

namespace App\Service;

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
}