<?php

use App\FacilityKind;
use Illuminate\Database\Seeder;

class FacilityKindSeeder extends Seeder
{
    public function run()
    {
        FacilityKind::truncate();
        
        FacilityKind::insert([
            ['name' => 'イベントスペース'],
            ['name' => '結婚式場'],
            ['name' => 'オフィススペース'],
            ['name' => 'ホール'],
            ['name' => '会議室'],
            ['name' => 'スタジオ'],
            ['name' => 'カフェ'],
            ['name' => 'レストラン'],
            ['name' => '映画館'],
            ['name' => 'ギャラリー'],
            ['name' => 'バー'],
            ['name' => 'スポーツ施設'],
            ['name' => 'ホテル'],
            ['name' => '住宅'],
            ['name' => '倉庫'],
            ['name' => 'ワイナリー・蔵'],
            ['name' => 'その他'],
        ]);
    }
}