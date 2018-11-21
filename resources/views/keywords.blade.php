@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv amenities"><div class="party_page_mv_box"><h1>キーワードから探す</h1>
    <p>なんとなくやってみたいことから、ここぞとばかりのスポット検索まで。<br>
キーワード検索機能を使って、関西一円の空きスペース情報を検索してみよう。<br>
思いついたらすぐご利用いただけます。</p>
    </div></div>
        @include('mid-nav')
    <div class="party_search_list bgcg">
   <div class="wrap party_abt">
<p>
	<a href="{{ action('SearchController@facility_kindsindex', '1' ) }}">イベント</a>
	<a href="{{ action('SearchController@facility_kindsindex', '2' ) }}">結婚式場</a>
	<a href="{{ action('SearchController@facility_kindsindex', '3' ) }}">オフィス</a>
	<a href="{{ action('SearchController@facility_kindsindex', '4' ) }}">ホール</a>
	<a href="{{ action('SearchController@facility_kindsindex', '5' ) }}">貸し会議室</a>
	<a href="{{ action('SearchController@facility_kindsindex', '6' ) }}">スタジオ</a>
	<a href="{{ action('SearchController@facility_kindsindex', '7' ) }}">カフェ</a>
	<a href="{{ action('SearchController@facility_kindsindex', '8' ) }}">レストラン</a>
	<a href="{{ action('SearchController@facility_kindsindex', '9' ) }}">映画館</a>
	<a href="{{ action('SearchController@facility_kindsindex', '10' ) }}">ギャラリー</a>
	<a href="{{ action('SearchController@facility_kindsindex', '11' ) }}">バー</a>
	<a href="{{ action('SearchController@facility_kindsindex', '12' ) }}">スポーツ施設</a>
	<a href="{{ action('SearchController@facility_kindsindex', '13' ) }}">娯楽施設</a>
	<a href="{{ action('SearchController@facility_kindsindex', '14' ) }}">ホテル</a>
	<a href="{{ action('SearchController@facility_kindsindex', '15' ) }}">住宅</a>
	<a href="{{ action('SearchController@facility_kindsindex', '16' ) }}">倉庫</a>
	<a href="{{ action('SearchController@facility_kindsindex', '17' ) }}">ワイナリ・蔵</a>
	<a href="{{ action('SearchController@facility_kindsindex', '18' ) }}">百貨店</a>
	<a href="{{ action('SearchController@facility_kindsindex', '19' ) }}">オフィス街</a>
	<a href="{{ action('SearchController@facility_kindsindex', '20' ) }}">商店街アーケード</a>
	<a href="{{ action('SearchController@facility_kindsindex', '21' ) }}">ロードサイド</a>
	<a href="{{ action('SearchController@facility_kindsindex', '22' ) }}">駅近　ロータリー</a>
	<a href="{{ action('SearchController@facility_kindsindex', '23' ) }}">軒先き</a>
	<a href="{{ action('SearchController@facility_kindsindex', '24' ) }}">移動販売車設置</a>
	<a href="{{ action('SearchController@facility_kindsindex', '25' ) }}">駅地下</a>
	<a href="{{ action('SearchController@facility_kindsindex', '26' ) }}">一戸建て</a>
	<a href="{{ action('SearchController@facility_kindsindex', '27' ) }}">テラス</a>
	<a href="{{ action('SearchController@facility_kindsindex', '28' ) }}">看板</a>
	<a href="{{ action('SearchController@facility_kindsindex', '29' ) }}">掲示スペース</a>
	<a href="{{ action('SearchController@facility_kindsindex', '30' ) }}">駐車場</a>
	<a href="{{ action('SearchController@facility_kindsindex', '31' ) }}">その他</a>
</p>
   </div>

    </div>


</section>

@stop
