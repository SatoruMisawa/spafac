<?php

use Illuminate\Database\Seeder;

class SpaceUsageSeeder extends Seeder
{
    private $table = 'space_usages';

    public function run()
    {
        DB::table($this->table)->truncate();

        DB::table($this->table)->insert([
            ['name' => 'パーティー'],
            ['name' => '会議'],
            ['name' => '宿泊'],
            ['name' => '写真撮影'],
            ['name' => 'ロケ撮影'],
            ['name' => 'イベント'],
            ['name' => '演奏・パフォーマンス'],
            ['name' => '個展・展示会'],
            ['name' => 'スポーツ・フィットネス'],
            ['name' => 'オフィス'],
            ['name' => '結婚式'],
            ['name' => 'その他'],
        ]);
    }
}
