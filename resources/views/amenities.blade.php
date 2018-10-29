@extends('layouts2.master')

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

<p>
<a href="/search">テーブル</a>
<a href="/search">椅子</a>
<a href="/search">プロジェクター</a>
<a href="/search">駐車場　</a>
<a href="/search">Wi-Fi</a>
<a href="/search">ホワイトボード</a>
<a href="/search">キッチン設備</a>
<a href="/search">調理機器</a>
<a href="/search">テレビ</a>
<a href="/search">プリンタ</a>
<a href="/search">ロッカー</a>
<a href="/search">携帯充電器</a>
<a href="/search">ケータリング</a>
<a href="/search">音響設備</a>
<a href="/search">ミラー</a>
<a href="/search">シャワー</a>
<a href="/search">更衣室</a>
<a href="/search">照明</a>
<a href="/search">トイレ</a>
<a href="/search">冷蔵冷凍庫</a>
<a href="/search">冷蔵庫</a>
<a href="/search">冷凍庫</a>
<a href="/search">電子レンジ</a>
<a href="/search">ケトル</a>
<a href="/search">エアコン</a>
<a href="/search">駅が近い</a>
<a href="/search">飲食店</a>
<a href="/search">コンビニ</a>
<a href="/search">スーパー</a>
<a href="/search">ペット可</a>
<a href="/search">バリアフリー</a>
<a href="/search">飲食可能</a>
<a href="/search">お子様連れ</a>
<a href="/search">シニア</a>
<a href="/search">喫煙可能</a>
<a href="/search">禁煙</a>
<a href="/search">喫煙所あり</a>
</p> 
   </div>

    </div>


</section>

@stop
