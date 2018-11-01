<?php

namespace App\Service;

interface Claimant {
    public function charge($params = []);
}