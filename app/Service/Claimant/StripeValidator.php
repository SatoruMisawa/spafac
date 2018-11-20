<?php

namespace App\Service;

use App\Exceptions\StripeValidationException;

class StripeValidator {
    public function validateToCharge($params) {
        if (!isset($params['guest_price_with_fee'])) {
            throw new StripeValidationException("parameter 'guest_price_with_fee' is not set");
        }
        if ($params['guest_price_with_fee'] <= 0) {
            throw new StripeValidationException("'guest_price_with_fee' should be more than 1");
        }
        if (!isset($params['host_reward'])) {
            throw new StripeValidationException("parameter 'host_reward' is not set");
        }
        if ($params['host_reward'] <= 0) {
            throw new StripeValidationException("'host_reward' should be more than 1");
        }
        if (!isset($params['source'])) {
            throw new StripeValidationException("parameter 'source' is not set");
        }
        if (!isset($params['destination'])) {
            throw new StripeValidationException("parameter 'desitination' is not set");
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