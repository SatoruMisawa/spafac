<?php

namespace App\Service;

interface Claimant {
    public function charge($params = []);

    public function createAccount($params = []);

    public function connectBankAccount($params = []);
}