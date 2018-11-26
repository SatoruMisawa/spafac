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
<section class="party_page">
<div class="three_list summary">
    <h2>関連するまとめ</h2>
    <div class="pac">
        <ul>
            <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/45198452_1936266683156801_4458416983733436416_n.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/arashi-moritomo-live/" target="_blank"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/arashi-moritomo-live/" target="_blank">森友嵐士さんのSecretライブ　イベントレポート</a></p>
           </li>
           <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/45280391_2066236716761304_8326664946569969664_o.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/zombie-partyshinsaibashi/" target="_blank"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/zombie-partyshinsaibashi/" target="_blank">【２０人限定】ジビエクィーン中川妙子スペシャルパーティー in心斎橋</a></p>
           </li>
           <li><div class="pic"><img src="https://magazine.spafac.com/wp-content/uploads/2018/11/box-2953722_640.jpg" alt="review" href="https://magazine.spafac.com/2018/11/08/2018xmasparty/" target="_blank"></div>
                <p><a href="https://magazine.spafac.com/2018/11/08/2018xmasparty/" target="_blank">今年のクリスマスはどう過ごしますか？大人女子の事情</a></p>
           </li>
        </ul>
    </div>
    <p class="more_lank"><a href="https://magazine.spafac.com/" target="_blank">関連するまとめをもっと見る</a></p>
</div>
</section>

@include('sp_kansaiarea')　<!-- 注目のエリア -->
@include('areas_table') <!-- エリア-->
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
