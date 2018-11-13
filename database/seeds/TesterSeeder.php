<?php

use App\Tester;
use Illuminate\Database\Seeder;

class TesterSeeder extends Seeder
{
    public function run()
    {
        Tester::truncate();

        Tester::insert([
            'name' => 'tester',
            'password' => Hash::make('IahOeuwyo7FcBytY'),
        ]);
    }
}