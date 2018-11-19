<?php

use App\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    public function run()
    {
        Provider::truncate();

        Provider::insert([
            ['name' => 'facebook'],
            ['name' => 'yahoojp'],
            ['name' => 'google'],
        ]); 
    }
}