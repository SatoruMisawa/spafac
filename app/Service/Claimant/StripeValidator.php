<?php

namespace App\Service;

use App\Exceptions\StripeValidationException;

class StripeValidator {
    public function validateToFillRequirements($params) {
        if (!isset($params['account_id'])) {
            throw new StripeValidationException('misssing parameters: account_id');
        }
    }
}