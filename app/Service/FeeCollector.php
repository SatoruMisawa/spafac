<?php

namespace App\Service;

class FeeCollector {
    const GUEST_FEE_RATIO = 0.05;

    const HOST_FEE_RATIO = 0.15;

    private $price;

    public function setPrice($price) {
        $this->price = $price;
    }

    public function calculateGuestPriceWithFee() {
        return $this->price + $this->guestFee();
    }

    private function guestFee() {
        return $this->price * self::GUEST_FEE_RATIO;
    }

    public function calculatehostReward() {
        return $this->price - $this->hostFee();
    }

    private function hostFee() {
        return $this->price * self::HOST_FEE_RATIO;
    }
}