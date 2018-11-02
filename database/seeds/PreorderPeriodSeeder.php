<?php

use Illuminate\Database\Seeder;

class PreorderPeriodSeeder extends Seeder
{
    private $table = 'preorder_periods';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => '3ヶ月先まで予約を受け付ける'],
            ['name' => '6ヶ月先まで予約を受け付ける'],
            ['name' => '9ヶ月先まで予約を受け付ける'],
            ['name' => '12ヶ月先まで予約を受け付ける'],
        ]);
    }
}
