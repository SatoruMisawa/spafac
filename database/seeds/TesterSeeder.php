<?php

use Illuminate\Database\Seeder;

class TesterSeeder extends Seeder
{
    private $table = 'testers';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            'name' => 'tester',
            'password' => Hash::make('IahOeuwyo7FcBytY'),
        ]);
    }
}
