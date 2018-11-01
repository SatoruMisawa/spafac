<?php

use App\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    private $table = 'providers';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => 'facebook'],
            ['name' => 'yahoojp'],
            ['name' => 'google'],
        ]); 
    }
}
