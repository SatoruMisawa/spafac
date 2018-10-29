@extends('layouts2.master')

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
<p><a href="/search">イベント</a><a href="/search">結婚式場</a><a href="/search">オフィス</a><a href="/search">ホール</a><a href="/search">貸会議室</a><a href="/search">スタジオ</a><a href="/search">カフェ</a><a href="/search">レストラン</a><a href="/search">映画館</a>
<a href="/search">ギャラリー</a><a href="/search">バー</a><a href="/search">スポーツ施設</a><a href="/search">娯楽施設</a><a href="/search">ホテル</a><a href="/search">住宅</a><a href="/search">倉庫</a><a href="/search">ワイナリー</a><a href="/search">蔵</a><a href="/search">百貨店</a><a href="/search">オフィス街</a><a href="/search">商店街</a><a href="/search">アーケード</a><a href="/search">ロードサイド</a><a href="/search">駅近</a><a href="/search">ロータリー</a><a href="/search">軒先</a><a href="/search">駅地下</a></p> 
   </div>

    </div>


</section>

@stop
