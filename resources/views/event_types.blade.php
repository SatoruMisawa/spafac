@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">
<section class="party_page">
	<div class="party_page_mv event_types"><div class="party_page_mv_box"><h1>目的から探す</h1>
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
<a href="/purpose/sales">物販</a>
<a href="/purpose/party">飲食・パーティー</a>
<a href="/purpose/office">オフィス・会議</a>
<a href="/purpose/event">イベントプロモーション・広告</a>
<a href="/purpose/exhibitionhall">催事・展示会</a>
<a href="/purpose/performance">演奏</a>
<a href="/stay">宿泊・民泊</a>
<a href="/purpose/location">ロケ撮影･写真･動画</a>
<a href="/purpose/wedding">結婚式・お祝いシーン</a>
<a href="/purpose/parking">駐車場</a>
<a href="/purpose/sports">スポーツ</a>
<a href="/purpose/other">その他</a>

</p>
   </div>

    </div>


</section>


@stop
