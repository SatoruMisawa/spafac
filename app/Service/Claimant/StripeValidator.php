<?php

namespace App\Service;

use App\Exceptions\StripeValidationException;

class StripeValidator {
    public function validateToCharge($params) {
        if (!isset($params['amount'])) {
            throw new StripeValidationException("parameter 'amount' is not set");
        }
        if ($params['amount'] <= 0) {
            throw new StripeValidationException("'country' should be more than 1");
        }
        if (!isset($params['source'])) {
            throw new StripeValidationException("parameter 'source' is not set");
        }
        if (!isset($params['destination']['account_id'])) {
            throw new StripeValidationException("parameter 'desitination.account_id' is not set");
        }
    }

    public function validateToConnectAccount($params) {
        if (!isset($params['country'])) {
            throw new StripeValidationException("parameter 'country' is not set");
        }
        if (!isset($params['type'])) {
            throw new StripeValidationException("parameter 'type' is not set");
        }
    }

    public function validateToConnectBankAccount($params) {
        if (!isset($params['account_id'])) {
            throw new StripeValidationException("parameter 'account_id' is not set");
        }
        if (!isset($params['bank_account_id'])) {
            throw new StripeValidationException("parameter 'bank_account_id' is not set");
        }
    }

    public function validateToFillRequirements($params) {
        if (!isset($params['account_id'])) {
            throw new StripeValidationException("parameter 'account_id' is not set");
        }
    }
}