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
@include('sp_amenity')　<!-- 設備-->
@include('sp_purpose')　<!-- 目的を探す-->
@include('sp_kansaiarea')　<!-- 注目のエリア -->
@include('areas_table') <!-- エリア-->
@include('sp_people')　<!-- 収容人数-->
@include('sp_institution')　<!-- 施設-->



</section>

@stop
