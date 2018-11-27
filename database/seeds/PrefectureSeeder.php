<?php

use App\Prefecture;
use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    public function run()
    {
        Prefecture::truncate();

        Prefecture::insert([
            ['name' => '北海道', 'name_ruby' => 'ホッカイドウ'],
            ['name' => '青森県', 'name_ruby' => 'アオモリケン'],
            ['name' => '岩手県', 'name_ruby' => 'イワテケン'],
            ['name' => '宮城県', 'name_ruby' => 'ミヤギケン'],
            ['name' => '秋田県', 'name_ruby' => 'アキタケン'],
            ['name' => '山形県', 'name_ruby' => 'ヤマガタケン'],
            ['name' => '福島県', 'name_ruby' => 'フクシマケン'],
            ['name' => '茨城県', 'name_ruby' => 'イバラギケン'],
            ['name' => '栃木県', 'name_ruby' => 'トチギケン'],
            ['name' => '群馬県', 'name_ruby' => 'グンマケン'],
            ['name' => '埼玉県', 'name_ruby' => 'サイタマケン'],
            ['name' => '千葉県', 'name_ruby' => 'チバケン'],
            ['name' => '東京都', 'name_ruby' => 'トウキョウト'],
            ['name' => '神奈川県', 'name_ruby' => 'カナガワケン'],
            ['name' => '新潟県', 'name_ruby' => 'ニイガタケン'],
            ['name' => '富山県', 'name_ruby' => 'トヤマケン'],
            ['name' => '石川県', 'name_ruby' => 'イシカワケン'],
            ['name' => '福井県', 'name_ruby' => 'フクイケン'],
            ['name' => '山梨県', 'name_ruby' => 'ヤマナシケン'],
            ['name' => '長野県', 'name_ruby' => 'ナガノケン'],
            ['name' => '岐阜県', 'name_ruby' => 'ギフケン'],
            ['name' => '静岡県', 'name_ruby' => 'シズオカケン'],
            ['name' => '愛知県', 'name_ruby' => 'アイチケン'],
            ['name' => '三重県', 'name_ruby' => 'ミエケン'],
            ['name' => '滋賀県', 'name_ruby' => 'シガケン'],
            ['name' => '京都府', 'name_ruby' => 'キョウトフ'],
            ['name' => '大阪府', 'name_ruby' => 'オオサカフ'],
            ['name' => '兵庫県', 'name_ruby' => 'ヒョウゴケン'],
            ['name' => '奈良県', 'name_ruby' => 'ナラケン'],
            ['name' => '和歌山県', 'name_ruby' => 'ワカヤマケン'],
            ['name' => '鳥取県', 'name_ruby' => 'トットリケン'],
            ['name' => '島根県', 'name_ruby' => 'シマネケン'],
            ['name' => '岡山県', 'name_ruby' => 'オカヤマケン'],
            ['name' => '広島県', 'name_ruby' => 'ヒロシマケン'],
            ['name' => '山口県', 'name_ruby' => 'ヤマグチケン'],
            ['name' => '徳島県', 'name_ruby' => 'トクシマケン'],
            ['name' => '香川県', 'name_ruby' => 'カガワケン'],
            ['name' => '愛媛県', 'name_ruby' => 'エヒメケン'],
            ['name' => '高知県', 'name_ruby' => 'コウチケン'],
            ['name' => '福岡県', 'name_ruby' => 'フクオカケン'],
            ['name' => '佐賀県', 'name_ruby' => 'サガケン'],
            ['name' => '長崎県', 'name_ruby' => 'ナガサキケン'],
            ['name' => '熊本県', 'name_ruby' => 'クマモトケン'],
            ['name' => '大分県', 'name_ruby' => 'オオイタケン'],
            ['name' => '宮崎県', 'name_ruby' => 'ミヤザキケン'],
            ['name' => '鹿児島県', 'name_ruby' => 'カゴシマケン'],
            ['name' => '沖縄県', 'name_ruby' => 'オキナワケン'],
        ]);
    }
}