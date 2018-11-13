<?php

use App\PreorderPeriod;
use Illuminate\Database\Seeder;

class PreorderPeriodSeeder extends Seeder
{
    public function run()
    {
        PreorderPeriod::truncate();

        PreorderPeriod::insert([
            ['name' => '3ヶ月先まで予約を受け付ける'],
            ['name' => '6ヶ月先まで予約を受け付ける'],
            ['name' => '9ヶ月先まで予約を受け付ける'],
            ['name' => '12ヶ月先まで予約を受け付ける'],
        ]);
    }
}