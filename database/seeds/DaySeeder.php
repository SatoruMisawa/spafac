<?php

use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    private $table = 'days';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
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
