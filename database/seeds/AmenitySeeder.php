<?php

use App\Amenity;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amenity::truncate();

        Amenity::insert([
            ['name' => 'テーブル'],
            ['name' => '椅子'],
            ['name' => 'プロジェクター'],
            ['name' => '駐車場'],
            ['name' => 'WI-FI'],
            ['name' => 'ホワイトボード'],
            ['name' => 'プリンター'],
            ['name' => 'キッチン設備'],
            ['name' => '調理機材'],
            ['name' => 'テレビ'],
            ['name' => 'ロッカー'],
            ['name' => 'ケータリング'],
            ['name' => 'バー'],
            ['name' => '音響設備'],
            ['name' => 'ミラー'],
            ['name' => 'シャワー'],
            ['name' => '更衣室'],
            ['name' => '照明設備'],
            ['name' => '写真撮影機材'],
            ['name' => '動画撮影機材'],
            ['name' => '公共交通機関'],
            ['name' => 'トイレ'],
            ['name' => '冷蔵庫'],
            ['name' => '電源'],
            ['name' => '冷暖房'],
            ['name' => '周辺に飲食店'],
            ['name' => 'スーバー/コンビニ'],
            ['name' => 'バリアフリー'],
            ['name' => '飲食可'],
            ['name' => 'ペット可'],
            ['name' => '子連れ可'],
            ['name' => '喫煙可'],
        ]);
    }
}