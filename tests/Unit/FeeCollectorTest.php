<?php

namespace Tests\Unit;

use App\Service\FeeCollector;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeeCollectorTest extends TestCase
{
    public function testFeeCalculation() {
        $price = 5000.0;
        $expectedGuestPriceWithFee = 5250.0;
        $expectedHostReward = 4250.0;
        $feeCollector = app()->make(FeeCollector::class);
        $feeCollector->setPrice($price);
        $this->assertEquals($expectedGuestPriceWithFee, $feeCollector->calculateGuestPriceWithFee());
        $this->assertEquals($expectedHostReward, $feeCollector->calculateHostReward());
    }
}