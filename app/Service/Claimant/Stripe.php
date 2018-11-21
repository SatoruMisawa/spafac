<?php

namespace App\Service;

use App\Exceptions\StripeValidationException;
use Stripe\Account;
use Stripe\Charge;

class Stripe implements Claimant {
    private $validator;

    public function __construct() {
        $this->validator = app()->make(StripeValidator::class);
    }

    public function charge($params = []) {
        try {
            $this->validator->validateToCharge($params);
            return Charge::create([
                'amount' => $params['guest_price_with_fee'],
                'currency' => "JPY",
                'source' => $params['source'],
                'destination' => [
                    'amount' => $params['host_reward'],
                    'account' => $params['destination'],
                ],
            ]);
        } catch (StripeValidationException $e) {
            report($e);
        }
    }

    public function connectAccount($params = []) {
        try {
            $this->validator->validateToConnectAccount($params);
            return Account::create([
                'country' => $params['country'],
                'type' => $params['type'],
            ]);
        } catch (StripeValidationException $e) {
            report($e);
        }
    }

    public function connectBankAccount($params = []) {
        try {
            $this->validator->validateToConnectBankAccount($params);
            $account = Account::retrieve($params['account_id']);
            $account->external_accounts->create([
                'external_account' => $params['bank_account_id'],
            ]);
        } catch (StripeValidationException $e) {
            report($e);
        }
    }

    public function fillRequirements($params = []) {
        try {
            $this->validator->validateToFillRequirements($params);
            $account = Account::retrieve($params['account_id']);
            $account->legal_entity = $params['legal_entity'];
            $account->tos_acceptance = $params['tos_acceptance'];
            $account->save();
        } catch (StripeValidationException $e) {
            report($e);
        }
    }
}