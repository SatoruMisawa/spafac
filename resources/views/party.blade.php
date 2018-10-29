@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/party_page.css">

<section class="party_page">
	<div class="party_page_mv"><div class="party_page_mv_box"><h1>パーティースペース</h1></div></div>
        @include('mid-nav')

   <div class="three_list party_lank">
   <h2>パーティスペースランキングTop3</h2>
       <ul>
           <li><a href="/search"><img src="/assets/images/party/okan01.png" class="okan" alt="1">
           <img src="/assets/images/party/party_img01.jpg" alt="party">
           <div class="readme">
           <p>小さいスペース</p>
           <p>1～5人 東京都新宿区新宿<span class="s-one"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>0000件</p>
           <p>新宿駅より徒歩1分</p>
           </div>
           </a>
           </li>
    
           <li><a href="/search"><img src="/assets/images/party/okan02.png" class="okan" alt="2">
           <img src="/assets/images/party/party_img01.jpg" alt="party">
           <div class="readme">
           <p>小さいスペース</p>
           <p>1～5人 東京都新宿区新宿<span class="s-two"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>0000件</p>
           <p>新宿駅より徒歩1分</p>
           </div></a>
           </li>
    
           <li><a href="/search"><img src="/assets/images/party/okan03.png" class="okan" alt="3">
           <img src="/assets/images/party/party_img01.jpg" alt="party">
           <div class="readme">
           <p>小さいスペース</p>
           <p>1～5人 東京都新宿区新宿<span class="s-three"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>0000件</p>
           <p>新宿駅より徒歩1分</p>
           </div></a>
           </li>
       </ul>
<p class="more_lank"><a href="/search">ランキングをもっと見る</a></p>
   </div>
    

   <div class="three_list new_review">
   <h2>新着レビュー</h2>
       <ul>
           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

           <li>
           <img src="/assets/images/party/party_icon01.png" alt="review">
           <h3>ここにニックネーム</h3>
               <div class="readme">
               <p>【直前20％OFF】☆MOLE五反田☆駅徒歩2分のキッチン付きスペース#タコパ#テレビ#うちスタ#たこ焼き</p>
               </div>
               <p class="date">登校日 2018/07/04</p>
               <p>10名程で会社の同僚のフェアウェルパーティーをしました。 非常に満足しています。ありがとうございました。 ・全体的に掃除が行き届いてきれいでした ・調理道具類も充実していました ・ゴミ　・・・</p>
           </li>

       </ul>
<p class="more_lank"><a href="/search">新着レビューをもっと読む</a></p>
   </div>


   <div class="three_list summary">
   <h2>関連するまとめ</h2>
       <ul>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・・・</p>
           </li>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・・・</p>
           </li>
           <li>
<div class="pic"></div>
<p>【緊急応援企画】日本代表のベルギー・・・</p>
           </li>
       </ul>
<p class="more_lank"><a href="/search">関連するまとめをもっと見る</a></p>
   </div>

    <div class="party_search_list attention_area">
   <h2>注目のエリア</h2>
   <ul>
   <li><a href="/search">
   <span><img src="/assets/images/party/umeda.png"></span><br>梅田</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/shinsaibashi.png"></span><br>心斎橋</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/nanba.png"></span><br>なんば</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kitahama.png"></span><br>北浜</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/yodoyabashi.png"></span><br>淀屋橋</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/honcho.png"></span><br>本町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/minamihunaba.png"></span><br>南船場</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/shinmachi.png"></span><br>新町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kitahorie.png"></span><br>北堀江</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/minamihorie.png"></span><br>南堀江</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/tannoji.png"></span><br>天王寺</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/abeno.png"></span><br>阿倍野</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kamihoncho.png"></span><br>上本町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kyoto.png"></span><br>京都</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/motomachi.png"></span><br>三宮・元町</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/kobe.png"></span><br>神戸・ハーバーランド</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/amagasaki.png"></span><br>尼崎</a></li>
   <li><a href="/search"><span><img src="/assets/images/party/nishinomiya.png"></span><br>西宮</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/ashiya.png"></span><br>芦屋</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/akashi.png"></span><br>明石</a></li>   
   <li><a href="/search"><span><img src="/assets/images/party/awajishima.png"></span><br>淡路島</a></li>   
   </ul>
    </div>

    <div class="party_search_list table_list bgcg">
   <h2>エリアから探す</h2>

<div class="wrap">
<h3>大阪府</h3>
<table>
<tbody>
<tr>
<td rowspan="11" class="rowspan">大阪市</td><td>

<ul class="table_list_menu">
<li>
<a href="/search">北区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">梅田</a></li>
    </ul>
</li>
<li>
<a href="/search">都島区</a>
</li>
<li>
<a href="/search">福島区</a>
</li>
<li>
<a href="/search">此花区</a>
</li>
<li>
<a href="/search">中央区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">心斎橋</a></li>
    <li><a href="/search">なんば</a></li>
    <li><a href="/search">北浜</a></li>
    <li><a href="/search">淀屋橋</a></li>
    <li><a href="/search">本町</a></li>
    <li><a href="/search">南船場</a></li>
    </ul>
</li>
<li>
<a href="/search">西区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">新町</a></li>
    <li><a href="/search">北堀江</a></li>
    <li><a href="/search">南堀江</a></li>
    </ul>
</li>
<li>
<a href="/search">港区</a>
</li>
<li>
<a href="/search">大正区</a>
</li>
<li>
<a href="/search">天王寺区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">天王寺</a></li>
    <li><a href="/search">阿倍野</a></li>
    <li><a href="/search">上本町</a></li>
    </ul>
</li>
<li>
<a href="/search">浪速区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">なんば</a></li>
    </ul>
</li>

<li><a href="/search">西淀川区</a></li>
<li><a href="/search">淀川区</a></li>
<li><a href="/search">東淀川区</a></li>
<li><a href="/search">西成区</a></li>
<li><a href="/search">生野区</a></li>
<li><a href="/search">旭区</a></li>
<li><a href="/search">城東区</a></li>
<li><a href="/search">鶴見区</a></li>
<li><a href="/search">阿倍野区</a></li>
<li><a href="/search">住之江区</a></li>
<li><a href="/search">住吉区</a></li>
<li><a href="/search">東住吉区</a></li>
</ul>

</td>
</tr>
</tbody>

<tbody>
<tr>		
<td rowspan="7" class="rowspan">堺市</td><td>


<ul class="table_list_menu">

<li>
<a href="/search">豊能地域</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">野瀬町</a></li><li><a href="/search">豊能町</a></li><li><a href="/search">池田市</a></li><li><a href="/search">箕面市</a></li><li><a href="/search">豊中市</a></li>
    </ul>
</li>
<li>
<a href="/search">三島地域</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">茨城市</a></li><li><a href="/search">高槻市</a></li><li><a href="/search">島本町</a></li><li><a href="/search">吹田市</a></li><li><a href="/search">摂津市</a></li>
    </ul>
</li>
<li>
<a href="/search">北河内地域</a>
<ul class="table_list_menu_sec">
<li><a href="/search">枚方市</a></li><li><a href="/search">交野市</a></li><li><a href="/search">寝屋川市</a></li><li><a href="/search">守口市</a></li><li><a href="/search">門真市</a></li><li><a href="/search">四條畷市</a></li><li><a href="/search">大東市</a></li>
</ul>

</li>

<li>
<a href="/search">中河内地域</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">東大阪市</a></li><li><a href="/search">八尾市</a></li><li><a href="/search">柏原市</a></li>
    </ul>
</li>

<li>
<a href="/search">泉北市域</a>
<ul class="table_list_menu_sec">
<li><a href="/search">和泉市</a></li><li><a href="/search">高石市</a></li><li><a href="/search">泉大津市</a></li><li><a href="/search">忠岡町</a></li>
</ul>
</li>

<li>
<a href="/search">泉南地域</a>
<ul class="table_list_menu_sec">
<li><a href="/search">岸和田市</a></li><li><a href="/search">貝塚市</a></li><li><a href="/search">熊取町</a></li><li><a href="/search">泉佐野市</a></li><li><a href="/search">田尻市</a></li><li><a href="/search">泉南市</a></li><li><a href="/search">阪南市</a></li><li><a href="/search">岬町</a></li>
</ul>
</li>

<li>

<a href="/search">南河内地域</a>
<ul class="table_list_menu_sec">
<li><a href="/search">松原市</a></li><li><a href="/search">羽曳野市</a></li><li><a href="/search">藤井寺市</a></li><li><a href="/search">太子町</a></li><li><a href="/search">河南町</a></li><li><a href="/search">千早赤阪村</a></li><li><a href="/search">富田林市</a></li><li><a href="/search">大阪狭山市</a></li><li><a href="/search">河内長野市</a></li>
</ul>

</li>
</ul>

</td>
</tr>
</tbody>
</table>

<h3>兵庫県</h3>
<table>
<tbody>
<tr>
<td class="rowspan">神戸市</td><td>

<ul class="table_list_menu">
<li><a href="/search">中央区</a>
<ul class="table_list_menu_sec">
<li><a href="/search">三宮・元町</a></li>
</ul>
</li>

<li><a href="/search">灘区</a></li>
<li><a href="/search">東灘区</a></li>
<li><a href="/search">兵庫区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">神戸、ハーバーランド</a></li>
    </ul>
</li>
<li><a href="/search">長田区</a></li>
<li><a href="/search">須磨区</a></li>
<li><a href="/search">垂水区</a></li>
<li><a href="/search">北区</a></li>
<li><a href="/search">西区</a></li>
</ul>

</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">阪神南地域</td>
<td>
<ul class="table_list_menu">
<li><a href="/search">尼崎市</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">尼崎</a></li>
    </ul>
</li>
<li><a href="/search">西宮市</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">西宮</a></li>
    </ul>
</li>
<li><a href="/search">芦屋市</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">芦屋</a></li>
    </ul>
</li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">阪神北地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">伊丹市</a></li>
<li><a href="/search">宝塚市</a></li>
<li><a href="/search">川西市</a></li>
<li><a href="/search">三田市</a></li>
<li><a href="/search">猪名川市</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">東播磨地域</td><td>

<ul class="table_list_menu">
    <li><a href="/search">明石明石市</a>
        <ul class="table_list_menu_sec">
        <li><a href="/search">明石</a></li>
        </ul>
    </li>
<li><a href="/search">加古川市</a></li>
<li><a href="/search">高砂市</a></li>
<li><a href="/search">稲見町</a></li>
<li><a href="/search">播磨町</a></li>
</ul>

</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">北磻磨地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">西脇市</a></li>
<li><a href="/search">三木市</a></li>
<li><a href="/search">小野市</a></li>
<li><a href="/search">加西市</a></li>
<li><a href="/search">加東市</a></li>
<li><a href="/search">多可町</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">中播磨地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">姫路市</a></li>
<li><a href="/search">神河町</a></li>
<li><a href="/search">市川町</a></li>
<li><a href="/search">福崎町</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">西播磨地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">相生市</a></li>
<li><a href="/search">たつの市</a></li>
<li><a href="/search">赤穂市</a></li>
<li><a href="/search">宍粟市</a></li>
<li><a href="/search">太子町</a></li>
<li><a href="/search">上郡町</a></li>
<li><a href="/search">左用町</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">但馬地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">豊岡市</a></li>
<li><a href="/search">秩父市</a></li>
<li><a href="/search">朝霧市</a></li>
<li><a href="/search">香美町</a></li>
<li><a href="/search">新温泉町</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">丹波地域</td><td>
<ul class="table_list_menu">
<li><a href="/search">篠山市</a></li>
<li><a href="/search">丹波市</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr class="top_border">	
<td class="rowspan">淡路島</td>
<td>
<ul class="table_list_menu">
    <li><a href="/search">洲本市</a>
        <ul class="table_list_menu_sec">
   		 <li><a href="/search">淡路島</a></li>
    	</ul>
    </li>
<li><a href="/search">南あわじ市</a></li>
<li><a href="/search">淡路市</a></li>
</ul>

</td>
</tr>
</tbody>
</table>

<h3>京都府</h3>
<table>
<tbody>
<tr>
<td class="rowspan">京都市</td><td>
<ul class="table_list_menu">
<li><a href="/search">上京区</a></li>
<li><a href="/search">左京区</a></li>
<li><a href="/search">中京区</a></li>
<li><a href="/search">東山区</a></li>
<li><a href="/search">山科区</a></li>
<li><a href="/search">下京区</a>
    <ul class="table_list_menu_sec">
    <li><a href="/search">京都</a></li>
    </ul>
</li>    
<li><a href="/search">南区</a></li>
<li><a href="/search">右京区</a></li>
<li><a href="/search">西京区</a></li>
<li><a href="/search">伏見区</a></li>
</ul>
</td>
</tr>
</tbody>
<tbody>
<tr>
<td class="rowspan">その他市域</td>
<td>
<ul class="table_list_menu">
<li><a href="/search">福知山市</a></li><li><a href="/search">舞鶴市</a></li><li><a href="/search">綾部市</a></li><li><a href="/search">宇治市</a></li><li><a href="/search">宮津市</a></li><li><a href="/search">亀岡市</a></li><li><a href="/search">城陽市</a></li><li><a href="/search">日向市</a></li><li><a href="/search">長岡京市</a></li><li><a href="/search">八幡市</a></li><li><a href="/search">京田辺市</a></li><li><a href="/search">京丹後市</a></li><li><a href="/search">南丹市</a></li><li><a href="/search">木津川市</a></li><li><a href="/search">乙訓郡</a></li><li><a href="/search">久世郡</a></li><li><a href="/search">綴喜郡</a></li><li><a href="/search">相楽郡</a></li><li><a href="/search">船井郡</a></li><li><a href="/search">与謝郡</a></li>
</ul>
</td>
</tr>
</tbody>
</table>
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
</div>

    </div>

    <div class="party_search_list">
   <h2>収容人数から探す</h2>
   <div class="wrap party_abt">
   <p><a href="/search">1人</a><a href="/search">5人</a><a href="/search">10人</a><a href="/search">20人</a><a href="/search">30人</a><a href="/search">40人</a><a href="/search">50人</a><a href="/search">100人</a><a href="/search">200人</a><a href="/search">300人</a><a href="/search">400人</a><a href="/search">500人</a><a href="/search">1000人</a><a href="/search">10000人</a></p>
   </div>
    </div>

    <div class="party_search_list bgcg">
   <h2>キーワードから探す</h2>
   <div class="wrap party_abt">

<p><a href="/search">イベント</a><a href="/search">結婚式場</a><a href="/search">オフィス</a><a href="/search">ホール</a><a href="/search">貸会議室</a><a href="/search">スタジオ</a><a href="/search">カフェ</a><a href="/search">レストラン</a><a href="/search">映画館</a>
<a href="/search">ギャラリー</a><a href="/search">バー</a><a href="/search">スポーツ施設</a><a href="/search">娯楽施設</a><a href="/search">ホテル</a><a href="/search">住宅</a><a href="/search">倉庫</a><a href="/search">ワイナリー</a><a href="/search">蔵</a><a href="/search">百貨店</a><a href="/search">オフィス街</a><a href="/search">商店街</a><a href="/search">アーケード</a><a href="/search">ロードサイド</a><a href="/search">駅近</a><a href="/search">ロータリー</a><a href="/search">軒先</a><a href="/search">駅地下</a></p> 
   </div>

    </div>


</section>

@stop
