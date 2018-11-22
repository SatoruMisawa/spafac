<?php

use App\RentSpaceBusinessType;
use Illuminate\Database\Seeder;

class RentSpaceBusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RentSpaceBusinessType::truncate();

        RentSpaceBusinessType::insert([
            ['name' => 'ホテル旅館'],
            ['name' => '簡易宿泊'],
            ['name' => '下宿'],
            ['name' => '民泊特区'],
            ['name' => '民泊新法'],
        ]);
    }
}