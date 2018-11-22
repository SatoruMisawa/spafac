<?php

use App\RentSpaceType;
use Illuminate\Database\Seeder;

class RentSpaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RentSpaceType::truncate();

        RentSpaceType::insert([
            ['name' => 'シェアルーム'],
            ['name' => '個室'],
            ['name' => 'まるまる貸切'],
        ]);
    }
}