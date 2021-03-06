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

    <div class="party_search_list">
<!--h2>収容人数から探す</h2>
   <div class="wrap party_abt">
<p class="txtL">やってみたいことから、場所や目的をキーワードで検索してみましょう。思いがけないスペースと巡り会えるかもしれません。関西地域密着で豊富な写真と空きスペース情報で1時間から１日からの利用可能！地図から直接検索もできます。設備も充実。予約カレンダーツールで空いている日を検索。スマホやパソコンでいつでもどこでもすぐに予約できます。使い方は様々です。気に入ったスペースを見つけて今すぐ活用しよう！</p-->
   <div class="wrap party_abt">
   <p>
		 <a href="{{ action('SearchController@capacitiesindex', '1' ) }}">～1人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '5' ) }}">～5人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '10' ) }}">～10人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '20' ) }}">～20人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '30' ) }}">～30人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '40' ) }}">～40人</a>
	   <a href="{{ action('SearchController@capacitiesindex', '50' ) }}">～50人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '100' ) }}">～100人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '200' ) }}">～200人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '300' ) }}">～300人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '400' ) }}">～400人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '500' ) }}">～500人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '1000' ) }}">～1000人</a>
		 <a href="{{ action('SearchController@capacitiesindex', '10000' ) }}">～10000人</a></p>
   </div>
    </div>


    </div>


</section>


@stop
