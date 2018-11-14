<?php

use App\KeyDelivery;
use Illuminate\Database\Seeder;

class KeyDeliverySeeder extends Seeder
{
    public function run()
    {
        KeyDelivery::truncate();

        KeyDelivery::insert([
            ['name' => '対面'],
            ['name' => 'キーボックス'],
            ['name' => 'スマートロック'],
            ['name' => '予約成立後にメッセージで伝える'],
        ]);
    }
}