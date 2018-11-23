@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">
<section class="party_page">
	<div class="party_page_mv event_types">
        <div class="party_page_mv_box"><h1>目的から探す</h1>
        <p>やってみたいことから、場所や目的をキーワードで検索してみましょう。<br>
        思いがけないスペースと巡り会えるかもしれません。<br>
        関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！地図から直接検索もできます。<br>
        設備も充実。予約カレンダーツールで空いている日を検索。スマホやパソコンでいつでもどこでもすぐに予約できます。<br>
        使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！</p>  
        </div>
    </div>
@include('mid-nav')
@include('sp_purpose')　<!-- 目的を探す-->
@include('sp_kansaiarea')　<!-- 注目のエリア -->
@include('sp_area')　<!-- エリア-->
@include('sp_people')　<!-- 収容人数-->
@include('sp_institution')　<!-- 施設-->
@include('sp_amenity')　<!-- 設備-->


</section>

<script>
$(function() {
	$('label.open').on('click', function () {
	$(this).parents('tbody').toggleClass("MaxHeight");

if ($(this).parents('tbody').hasClass("MaxHeight")) {
	$(this).html("▲とじる");
	$(this).css({"bottom":"1em","top":"inherit"});

  } else if (!$(this).parents('tbody').hasClass("MaxHeight")) {
	$(this).html("▼ひらく");
	$(this).css({"top":"1em","bottom":"inherit"});
}
	
    });
});
</script>


@stop
