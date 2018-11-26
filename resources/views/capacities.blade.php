@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv capacities"><div class="party_page_mv_box"><h1>収容人数から探す</h1>
    <p>大人数を収容できるスペース。<br>お一人様から利用できる個人スペースと様々な収容人数のスペースがあります。<br>
関西エリアの検索機能と、設備や用途に合わせてお気に入りの場所を探してみましょう。<br>
予約は簡単！カレンダーツールで空いている日を検索。<br>
スマホやパソコンでいつでもどこでもすぐに予約できます。</p>
    </div></div>
@include('mid-nav')
@include('sp_people')　<!-- 収容人数-->
@include('sp_purpose')　<!-- 目的を探す-->
@include('sp_institution')　<!-- 施設-->
@include('sp_kansaiarea')　<!-- 注目のエリア -->
@include('areas_table') <!-- エリア-->
@include('sp_amenity')　<!-- 設備-->

</section>


@stop
