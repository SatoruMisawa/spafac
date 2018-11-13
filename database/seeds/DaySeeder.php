<?php

use App\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    public function run()
    {
        Day::truncate();

        Day::insert([
            ['name' => '日'],
            ['name' => '月'],
            ['name' => '火'],
            ['name' => '水'],
            ['name' => '木'],
            ['name' => '金'],
            ['name' => '土'],
            ['name' => '祝日'],
        ]);
    }
}