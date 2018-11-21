<?php

namespace App\Mocks;

use App\Service\Claimant as Genuine;

class Claimant implements Genuine {
    public function charge($params = []) {
        return json_decode(json_encode([
            'id' => str_random(30),
        ]));
    }

    public function connectAccount($params = []) {
    }

    public function connectBankAccount($params = []) {
    }

    public function fillRequirements($params = []) {
    }
}