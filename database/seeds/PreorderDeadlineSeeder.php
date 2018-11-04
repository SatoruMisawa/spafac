<?php

use Illuminate\Database\Seeder;

class PreorderDeadlineSeeder extends Seeder
{
    private $table = 'preorder_deadlines';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => '利用日当日'],
            ['name' => '利用日の1日前'],
            ['name' => '利用日の2日前'],
            ['name' => '利用日の3日前'],
            ['name' => '利用日の7日前'],
            ['name' => '利用日の14日前'],
        ]);
    }
}
