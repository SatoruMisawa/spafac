<?php

use Illuminate\Database\Seeder;

class SpaceUsageSeeder extends Seeder
{
    private $table = 'space_usages';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => '物販'],
            ['name' => '飲食・パーティ'],
            ['name' => '催事・展示会'],
            ['name' => 'イベントプロモーション・広告'],
            ['name' => 'オフィス・会議'],
            ['name' => '宿泊・民泊'],
            ['name' => '結婚式・お祝いシーン'],
            ['name' => '演奏'],
            ['name' => 'ロケ撮影・写真・動画'],
            ['name' => '駐車場'],
            ['name' => 'スポーツ'],
            ['name' => 'その他'],
        ]);
    }
}
