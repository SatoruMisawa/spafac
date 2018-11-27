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
        if (!isset($params['customer'])) {
            throw new StripeValidationException("parameter 'customer' is not set");
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
        if (!isset($params['legal_entity']['address_kana']['postal_code'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kana.postal_code' is not set");
        }
        if (!isset($params['legal_entity']['address_kana']['state'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kana.state' is not set");
        }
        if (!isset($params['legal_entity']['address_kana']['city'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kana.city' is not set");
        }
        if (!isset($params['legal_entity']['address_kana']['town'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kana.town' is not set");
        }
        if (!isset($params['legal_entity']['address_kana']['line1'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kana.line1' is not set");
        }
        if (!isset($params['legal_entity']['address_kanji']['postal_code'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kanji.postal_code' is not set");
        }
        if (!isset($params['legal_entity']['address_kanji']['state'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kanji.state' is not set");
        }
        if (!isset($params['legal_entity']['address_kanji']['city'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kanji.city' is not set");
        }
        if (!isset($params['legal_entity']['address_kanji']['town'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kanji.town' is not set");
        }
        if (!isset($params['legal_entity']['address_kanji']['line1'])) {
            throw new StripeValidationException("parameter 'legel_entity.address_kanji.line1' is not set");
        }
        if (!isset($params['legal_entity']['dob']['day'])) {
            throw new StripeValidationException("parameter 'legel_entity.dob.day' is not set");
        }
        if (!isset($params['legal_entity']['dob']['month'])) {
            throw new StripeValidationException("parameter 'legel_entity.dob.month' is not set");
        }
        if (!isset($params['legal_entity']['dob']['year'])) {
            throw new StripeValidationException("parameter 'legel_entity.dob.year' is not set");
        }
        if (!isset($params['legal_entity']['first_name_kana'])) {
            throw new StripeValidationException("parameter 'legel_entity.first_name_kana' is not set");
        }
        if (!isset($params['legal_entity']['first_name_kanji'])) {
            throw new StripeValidationException("parameter 'legel_entity.first_name_kanji' is not set");
        }
        if (!isset($params['legal_entity']['last_name_kana'])) {
            throw new StripeValidationException("parameter 'legel_entity.last_name_kana' is not set");
        }
        if (!isset($params['legal_entity']['last_name_kanji'])) {
            throw new StripeValidationException("parameter 'legel_entity.last_name_kanji' is not set");
        }
        if (!isset($params['legal_entity']['gender'])) {
            throw new StripeValidationException("parameter 'legel_entity.gender' is not set");
        }
        if (!isset($params['legal_entity']['phone_number'])) {
            throw new StripeValidationException("parameter 'legel_entity.phone_number' is not set");
        }
        if (!isset($params['legal_entity']['type'])) {
            throw new StripeValidationException("parameter 'legel_entity.type' is not set");
        }
        if (!isset($params['tos_acceptance']['date'])) {
            throw new StripeValidationException("parameter 'tos_acceptance.type' is not set");
        }
        if (!isset($params['tos_acceptance']['ip'])) {
            throw new StripeValidationException("parameter 'tos_acceptance.ip' is not set");
        }
    }
}