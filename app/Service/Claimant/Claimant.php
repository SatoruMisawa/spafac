<?php

namespace App\Service;

interface Claimant {
    public function charge($params = []);

    public function connectAccount($params = []);

    public function connectBankAccount($params = []);
}