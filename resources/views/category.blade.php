@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv"><div class="party_page_mv_box"><h1>カテゴリから探す</h1>
<p>やってみたいことから、場所や目的をキーワードで検索してみましょう。<br>
思いがけないスペースと巡り会えるかもしれません。<br>
関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！地図から直接検索もできます。<br>
設備も充実。予約カレンダーツールで空いている日を検索。スマホやパソコンでいつでもどこでもすぐに予約できます。<br>
使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！</p>       
    </div></div>
        @include('mid-nav')
    <div class="party_search_list bgcg">
   <div class="wrap party_abt">

<p>
<a href="/search">イベント</a>
<a href="/search">結婚式場</a>
<a href="/search">オフィス</a>
<a href="/search">ホール</a>
<a href="/search">貸し会議室</a>
<a href="/search">スタジオ</a>
<a href="/search">カフェ</a>
<a href="/search">レストラン</a>
<a href="/search">映画館</a>
<a href="/search">ギャラリー</a>
<a href="/search">バー</a>
<a href="/search">スポーツ施設</a>
<a href="/search">娯楽施設</a>
<a href="/search">ホテル</a>
<a href="/search">住宅</a>
<a href="/search">倉庫</a>
<a href="/search">ワイナリー　蔵</a>
<a href="/search">百貨店</a>
<a href="/search">オフィス街</a>
<a href="/search">商店街アーケード</a>
<a href="/search">ロードサイド</a>
<a href="/search">駅近　ロータリー</a>
<a href="/search">軒先き</a>
<a href="/search">移動販売車設置</a>
<a href="/search">駅地下</a>
<a href="/search">一戸建て</a>
<a href="/search">テラス</a>
<a href="/search">看板</a>
<a href="/search">掲示スペース</a>
<a href="/search">駐車場</a>
<a href="/search">その他</a>
</p> 
   </div>

    </div>


</section>

@stop
