<?php

use Illuminate\Database\Seeder;

class KeyDeliverySeeder extends Seeder
{
    private $table = 'key_deliveries';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => '対面'],
            ['name' => 'キーボックス'],
            ['name' => 'スマートロック'],
            ['name' => '予約成立後にメッセージで伝える'],
        ]);
    }
}
