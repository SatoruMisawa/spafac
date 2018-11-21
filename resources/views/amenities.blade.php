@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv amenities">
    <div class="party_page_mv_box">
    <h1>設備から探す</h1>
    <p>出張先であったらいいな。こんな設備があればいいな。<br>
などスペースの利用者様に少しでも快適な空間をご利用いただけますように、<br>
様々な設備から検索・予約できるように致しました。<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！地図から直接検索もできます。<br>
設備も充実。予約カレンダーツールで空いている日を検索。スマホやパソコンでいつでもどこでもすぐに予約できます。<br>
使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！
    </div>
    </div>

         @include('mid-nav')
    <div class="party_search_list bgcg">
   <div class="wrap party_abt">

<a href="{{ action('SearchController@amenitiesindex', '1' ) }}">テーブル</a>
<a href="{{ action('SearchController@amenitiesindex', '2' ) }}">椅子</a>
<a href="{{ action('SearchController@amenitiesindex', '3' ) }}">プロジェクター</a>
<a href="{{ action('SearchController@amenitiesindex', '4' ) }}">駐車場　</a>
<a href="{{ action('SearchController@amenitiesindex', '5' ) }}">Wi-Fi</a>
<a href="{{ action('SearchController@amenitiesindex', '6' ) }}">ホワイトボード</a>
<a href="{{ action('SearchController@amenitiesindex', '7' ) }}">キッチン設備</a>
<a href="{{ action('SearchController@amenitiesindex', '8' ) }}">調理機器</a>
<a href="{{ action('SearchController@amenitiesindex', '9' ) }}">テレビ</a>
<a href="{{ action('SearchController@amenitiesindex', '10' ) }}">プリンタ</a>
<a href="{{ action('SearchController@amenitiesindex', '11' ) }}">ロッカー</a>
<a href="{{ action('SearchController@amenitiesindex', '12' ) }}">携帯充電器</a>
<a href="{{ action('SearchController@amenitiesindex', '13' ) }}">ケータリング</a>
<a href="{{ action('SearchController@amenitiesindex', '14' ) }}">音響設備</a>
<a href="{{ action('SearchController@amenitiesindex', '15' ) }}">ミラー</a>
<a href="{{ action('SearchController@amenitiesindex', '16' ) }}">シャワー</a>
<a href="{{ action('SearchController@amenitiesindex', '17' ) }}">更衣室</a>
<a href="{{ action('SearchController@amenitiesindex', '18' ) }}">照明</a>
<a href="{{ action('SearchController@amenitiesindex', '19' ) }}">トイレ</a>
<a href="{{ action('SearchController@amenitiesindex', '20' ) }}">冷蔵冷凍庫</a>
<a href="{{ action('SearchController@amenitiesindex', '21' ) }}">冷蔵庫</a>
<a href="{{ action('SearchController@amenitiesindex', '22' ) }}">冷凍庫</a>
<a href="{{ action('SearchController@amenitiesindex', '23' ) }}">電子レンジ</a>
<a href="{{ action('SearchController@amenitiesindex', '24' ) }}">ケトル</a>
<a href="{{ action('SearchController@amenitiesindex', '25' ) }}">エアコン</a>
<a href="{{ action('SearchController@amenitiesindex', '26' ) }}">駅が近い</a>
<a href="{{ action('SearchController@amenitiesindex', '27' ) }}">飲食店</a>
<a href="{{ action('SearchController@amenitiesindex', '28' ) }}">コンビニ</a>
<a href="{{ action('SearchController@amenitiesindex', '29' ) }}">スーパー</a>
<a href="{{ action('SearchController@amenitiesindex', '30' ) }}">ペット可</a>
<a href="{{ action('SearchController@amenitiesindex', '31' ) }}">バリアフリー</a>
<a href="{{ action('SearchController@amenitiesindex', '32' ) }}">飲食可能</a>
<a href="{{ action('SearchController@amenitiesindex', '33' ) }}">お子様連れ</a>
<a href="{{ action('SearchController@amenitiesindex', '34' ) }}">シニア</a>
<a href="{{ action('SearchController@amenitiesindex', '35' ) }}">喫煙可能</a>
<a href="{{ action('SearchController@amenitiesindex', '36' ) }}">禁煙</a>
<a href="{{ action('SearchController@amenitiesindex', '37' ) }}">喫煙所あり</a>
</p>
   </div>

    </div>


</section>

@stop
