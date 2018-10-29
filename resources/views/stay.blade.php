@extends('layouts2.master_stay')

@section('content')
<label class="search-icon" for="search-ck">
<svg version="1.1" id="search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="40px" height="40px" viewBox="620 620 40 40" enable-background="new 620 620 40 40" xml:space="preserve">
<path fill="#9E9E9E" d="M659.453,654.582l-7.789-7.787c-0.352-0.352-0.828-0.547-1.327-0.547h-1.273
	c2.155-2.758,3.437-6.227,3.437-10c0-8.976-7.272-16.249-16.248-16.249s-16.249,7.272-16.249,16.249s7.273,16.249,16.249,16.249
	c3.772,0,7.241-1.281,9.999-3.438v1.273c0,0.5,0.195,0.977,0.547,1.328l7.788,7.788c0.734,0.734,1.922,0.734,2.648,0l2.211-2.211
	C660.18,656.504,660.18,655.316,659.453,654.582z M636.252,646.248c-5.523,0-9.999-4.469-9.999-10c0-5.523,4.468-9.999,9.999-9.999
	c5.522,0,9.999,4.468,9.999,9.999C646.251,641.771,641.782,646.248,636.252,646.248z"/>
</svg>
</label>
<input type="checkbox" id="search-ck">
<link rel="stylesheet" type="text/css" href="/assets/css/stay.css">
<article class="stay_container">

<section class="stay_page">
    <div class="wrap stay_logo">
    <img src="/assets/images/stay/stay_logo.png" alt="関西地域限定　宿泊先を探す">
    <img src="/assets/images/stay/stay_catch.png" alt="どこへ向かいますか？">
    </div>
    <nav class="stay_search">
    <h1>関西地域限定　宿泊先を探す</h1>
    <form action="/search" method="get">
    <div><input type="text" placeholder="エリア　地名" value=""><i>▼</i></div>
    <div><input type="text" placeholder="チェックイン・アウト" value=""><i>▼</i></div>
    <div><input type="text" placeholder="宿泊人数" value=""><i>▼</i></div>    
    <input type="submit" value="検索">
    </form>    
    </nav>
    <div class="stay_page_mv">&nbsp;</div>
</section>

<section class="stay_page">
    <div class="wrap left-box">
    <h2>旅の目的別</h2>
<div class="slider">
    <ul class="three-box">
    	<li>
        <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img01.jpg" width="300" height="200">
        </div>
        <h3>カップル</h3>
        <p>カップルで思い出作り。おしゃれな空間とフォトジェニックな空間を兼ね備えた宿泊先で</p>
        </a>
        </li>

    	<li>
        <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img02.jpg" width="300" height="200">
        </div>
        <h3>ファミリー</h3>
        <p>大人も子供の大満足！充実したファミリーホリディをお楽しみいただける宿泊先</p>
        </a>
        </li>

    	<li>
        <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img03.jpg" width="300" height="200">
        </div>
        <h3>友達旅行</h3>
        <p>気の合う仲間との思い出作りに最高の宿
泊先を。大人数でもゆったり過ごせます</p>
		</a>        
        </li>
        
    </ul>
</div>
    </div>
</section>

<section class="stay_page bg_mid_mv">
    <div class="wrap left-box">
    <div class="add-box">
    <h2>旅のお手伝いをしませんか？</h2>
    <p>宿泊スペースをお持ちの方</p>
    <p><a href="">登録する</a></p>
    </div>
    </div>
</section>

<section class="stay_page">
    <div class="wrap left-box">
    <h2>
    <img src="/assets/images/stay/stay_logo02.png" width="295" height="108">
    </h2>
    <div class="slider">
    <ul class="three-box center">    
    <li>    
    <img src="/assets/images/stay/stay_icon03.png" width="247" height="247">
    </li>
    <li>
    <img src="/assets/images/stay/stay_icon04.png" width="247" height="247">
    </li>
    <li>
    <img src="/assets/images/stay/stay_icon05.png" width="247" height="247">
    </li>
    </ul>
    </div>
    
    </div>
</section>

<section class="stay_page bg-orange">
    <div class="wrap left-box">
        <h2>
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        注目の宿泊スペース
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        </h2>
    <div class="slider">
    <ul class="three-box">
    	<li>
	    <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img04.jpg" width="300" height="200">
        </div>
        <h3>宿泊×時間貸しの二毛作</h3>
        <p>宿泊の予定がない時は、一時間から使えるレンタルスペースとして使えるシーンに応じたスペースを提供</p>        
        </a>
        </li>

    	<li>
	    <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img05.jpg" width="300" height="200">
        </div>
        <h3>宿泊先は充実の設備</h3>
        <p>調理器具や設備も充実。宿泊先でおいしい料理を作りながら味ないながら</p>        
		</a>
        </li>

    	<li>
	    <a href="/stay/details">
        <div class="pic">
        <img src="/assets/images/stay/stay_img06.jpg" width="300" height="200">
        </div>
        <h3>出張 / ビジネス</h3>
        <p>出張先でもビジネスシーンにマストなアイテムが揃った宿泊先を選ぼう</p>
        </a>
        </li>
        
    </ul>        
    </div>    
    </div>
</section>

<section class="stay_page">
    <div class="wrap left-box">
    <h2 class="mg-b0">宿泊Topic</h2>
    <p class="f-size18 txtC">宿泊スペースに関するお役立ち情報</p>
    <div class="slider">
    <ul class="three-box mg-t2em">
    	<li>
        <div class="pic">
 <img src="/assets/images/stay/stay_img04.jpg" width="300" height="200">        
        </div>
        </li>
    	<li>
        <div class="pic">
 <img src="/assets/images/stay/stay_img05.jpg" width="300" height="200">        
        </div>
        </li>
    	<li>
        <div class="pic">
 <img src="/assets/images/stay/stay_img06.jpg" width="300" height="200">        
        </div>
      	</li>
	</ul>
    </div>            
    
    </div>
</section>

<section class="stay_page bg-orange">
    <div class="wrap left-box">
        <h2 class="mg-b0">近隣のレストランを探す</h2>
        <p class="f-size18 txtC">宿泊先の近くにあるレストラン情報をお届け</p>
    <div class="slider">
    <ul class="three-box mg-t2em">
    	<li>
 	    <a href="/stay/details">
        <div class="pic">
 <img src="/assets/images/stay/stay_img04.jpg" width="300" height="200">        
        </div>
        </a>
        </li>
    	<li>
     	<a href="/stay/details">
        <div class="pic">
 <img src="/assets/images/stay/stay_img05.jpg" width="300" height="200">        
        </div>
        </a>
        </li>
    	<li>
	    <a href="/stay/details">
        <div class="pic">
 <img src="/assets/images/stay/stay_img06.jpg" width="300" height="200">        
        </div>
		</a>
      	</li>
	</ul>
    </div> 
    </div>
</section>

<section class="stay_page">
    <div class="wrap left-box">
    <h2>関西</h2>
    <div class="slider">
         <ul class="fourth-box mg-t2em">
         <li>
	    <a href="/stay/details">
         <div class="pic">
         <img src="/assets/images/stay/stay_img07.jpg" width="235" height="250">
         <p class="price-bk">30,000円/日<br>1,000円/時間～</p>
         </div>
         <p>小さいスペース<br>1～5人 東京都新宿区西新宿<span class="star one"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>000件　新宿駅より徒歩1分</p>
		</a>
         </li>
 
         <li>
	    <a href="/stay/details">
         <div class="pic">
         <img src="/assets/images/stay/stay_img07.jpg" width="235" height="250">
         <p class="price-bk">30,000円/日<br>1,000円/時間～</p>
         </div>
         <p>小さいスペース<br>1～5人 東京都新宿区西新宿<span class="star two"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>000件　新宿駅より徒歩1分</p>
		</a>
         </li>

         <li>
	    <a href="/stay/details">
         <div class="pic">
         <img src="/assets/images/stay/stay_img07.jpg" width="235" height="250">
         <p class="price-bk">30,000円/日<br>1,000円/時間～</p>
         </div>
         <p>小さいスペース<br>1～5人 東京都新宿区西新宿<span class="star three"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>000件　新宿駅より徒歩1分</p>
		</a>
         </li>

         <li>
	    <a href="/stay/details">
         <div class="pic">
         <img src="/assets/images/stay/stay_img07.jpg" width="235" height="250">
         <p class="price-bk">30,000円/日<br>1,000円/時間～</p>
         </div>
         <p>小さいスペース<br>1～5人 東京都新宿区西新宿<span class="star four"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>000件　新宿駅より徒歩1分</p>
		</a>
         </li>
                
         </ul>
</div>
    </div>
</section>

<section class="stay_page bg-orange">
    <div class="wrap left-box">
        <h2>
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        注目のエリア
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        <img src="/assets/images/stay/stay_icon06.png" width="26" height="24">
        </h2>
    <div class="slider">
         <ul class="fourth-box mg-t2em">
         <li>
	    <a href="/stay/details">
         <img src="/assets/images/stay/stay_img08.jpg" width="235" height="250">
		</a>
         </li>
         <li>
	    <a href="/stay/details">
        <img src="/assets/images/stay/stay_img09.jpg" width="235" height="250">
        </a>
         </li>
         <li>
	    <a href="/stay/details">
         <img src="/assets/images/stay/stay_img10.jpg" width="235" height="250">
         </a>
         </li>
         <li>
	    <a href="/stay/details">
         <img src="/assets/images/stay/stay_img11.jpg" width="235" height="250">
         </a>
         </li>
         </ul>
</div>        
    </div>
</section>

<aside id="rightSide">
<label id="rightSide-close" for="search-ck">×</label>
<form>
<ul class="side-menu">
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side01.png" width="30" height="30">検索条件</p>
<p><input type="text" placeholder="エリア　地名"></p>
<p><input type="text" placeholder="チェックイン・アウト"></p>
<p><input type="text" placeholder="宿泊人数"></p>
<p><input type="submit" value="絞り込む"></p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side02.png" width="30" height="30">予約オプション</p>
<p><input type="checkbox" id="search-option[1]"><label for="search-option[1]" class="chkbox">今すぐ予約可能</label></p>
<p><input type="checkbox" id="search-option[2]"><label for="search-option[2]" class="chkbox">直前割プラン</label></p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side03.png" width="30" height="30">キャンペーン</p>
<p>Comming soon</p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side04.png" width="30" height="30">予算</p>
<div class="yen">
下限なし 　 円～　上限なし　　円～
</div>
    <ul class="yosan">
    <li>
        <p class="yosanTitle">お部屋タイプ</p>
        <p><input type="checkbox" id="search-type[1]"><label for="search-type[1]" class="chkbox">シェアスペース</label></p>
        <p><input type="checkbox" id="search-type[2]"><label for="search-type[2]" class="chkbox">個室</label></p>
        <p><input type="checkbox" id="search-type[3]"><label for="search-type[3]" class="chkbox">貸切</label></p>
    </li>
    <li>



<p class="side-sub-title">設備</p>
<div class="more-box-s mbz">
<input type="checkbox" id="search-facility[1]"><label for="search-facility[1]" class="chkbox">シャワー</label>
<input type="checkbox" id="search-facility[2]"><label for="search-facility[2]" class="chkbox">キッチン設備</label>
<input type="checkbox" id="search-facility[3]"><label for="search-facility[3]" class="chkbox">トイレ</label>
<input type="checkbox" id="search-facility[4]"><label for="search-facility[4]" class="chkbox">更衣室</label>
<input type="checkbox" id="search-facility[5]"><label for="search-facility[5]" class="chkbox">照明</label>
<input type="checkbox" id="search-facility[6]"><label for="search-facility[6]" class="chkbox">テーブル</label>
</div>

<input type="checkbox" id="more">
<p class="txtR"><label class="open" for="more">さらに表示▼</label></p>
<div class="more-box">
<div class="more-box-s">
<input type="checkbox" id="search-facility[7]"><label for="search-facility[7]" class="chkbox">椅子</label>
<input type="checkbox" id="search-facility[8]"><label for="search-facility[8]" class="chkbox">プロジェクター</label>
<input type="checkbox" id="search-facility[9]"><label for="search-facility[9]" class="chkbox">音響設備</label>
<input type="checkbox" id="search-facility[10]"><label for="search-facility[10]" class="chkbox">駐車場</label>
<input type="checkbox" id="search-facility[11]"><label for="search-facility[11]" class="chkbox">ホワイトボード</label>
<input type="checkbox" id="search-facility[12]"><label for="search-facility[12]" class="chkbox">ロッカー</label>
<input type="checkbox" id="search-facility[13]"><label for="search-facility[13]" class="chkbox">ミラー</label>
<input type="checkbox" id="search-facility[14]"><label for="search-facility[14]" class="chkbox">電子レンジ</label>
<input type="checkbox" id="search-facility[15]"><label for="search-facility[15]" class="chkbox">洗濯機</label>
<input type="checkbox" id="search-facility[16]"><label for="search-facility[16]" class="chkbox">乾燥機</label>
<input type="checkbox" id="search-facility[17]"><label for="search-facility[17]" class="chkbox">冷蔵冷凍庫</label>
<input type="checkbox" id="search-facility[18]"><label for="search-facility[18]" class="chkbox">冷蔵庫</label>
<input type="checkbox" id="search-facility[19]"><label for="search-facility[19]" class="chkbox">冷凍庫</label>
<input type="checkbox" id="search-facility[20]"><label for="search-facility[20]" class="chkbox">エアコン</label>
<input type="checkbox" id="search-facility[21]"><label for="search-facility[21]" class="chkbox">プリンタ</label>
<input type="checkbox" id="search-facility[22]"><label for="search-facility[22]" class="chkbox">DVDデッキ</label>
<input type="checkbox" id="search-facility[23]"><label for="search-facility[23]" class="chkbox">ケトル</label>
</div>


<p class="side-sub-title">アメニティ</p>
<div class="more-box-s">
<input type="checkbox" id="search-amenities[1]"><label for="search-amenities[1]" class="chkbox">Wifi</label>
<input type="checkbox" id="search-amenities[2]"><label for="search-amenities[2]" class="chkbox">ドライヤー</label>
<input type="checkbox" id="search-amenities[3]"><label for="search-amenities[3]" class="chkbox">食器</label>
<input type="checkbox" id="search-amenities[4]"><label for="search-amenities[4]" class="chkbox">グラス</label>
<input type="checkbox" id="search-amenities[5]"><label for="search-amenities[5]" class="chkbox">ハンガー</label>
<input type="checkbox" id="search-amenities[6]"><label for="search-amenities[6]" class="chkbox">アイロン アイロン台</label>
<input type="checkbox" id="search-amenities[7]"><label for="search-amenities[7]" class="chkbox">布団/枕</label>
<input type="checkbox" id="search-amenities[8]"><label for="search-amenities[8]" class="chkbox">アメニティグッズ（歯ブラシ カミソリ ヘアブラシ 生理用品）</label>
<input type="checkbox" id="search-amenities[9]"><label for="search-amenities[9]" class="chkbox">シャンプー リンス</label>
<input type="checkbox" id="search-amenities[10]"><label for="search-amenities[10]" class="chkbox"> ボディソープ</label>
<input type="checkbox" id="search-amenities[11]"><label for="search-amenities[11]" class="chkbox">バスタオル</label>
<input type="checkbox" id="search-amenities[12]"><label for="search-amenities[12]" class="chkbox">フェイスタオル</label>
<input type="checkbox" id="search-amenities[13]"><label for="search-amenities[13]" class="chkbox">ガウン</label>
<input type="checkbox" id="search-amenities[14]"><label for="search-amenities[14]" class="chkbox">浴衣</label>
<input type="checkbox" id="search-amenities[15]"><label for="search-amenities[15]" class="chkbox">携帯充電器</label>
</div>

<p class="side-sub-title">その他</p>
<div class="more-box-s">
<input type="checkbox" id="search-other[1]"><label for="search-other[1]" class="chkbox">コンビニ近い</label>
<input type="checkbox" id="search-other[2]"><label for="search-other[2]" class="chkbox">スーパー</label>
<input type="checkbox" id="search-other[3]"><label for="search-other[3]" class="chkbox">駅が近い</label>
<input type="checkbox" id="search-other[4]"><label for="search-other[4]" class="chkbox">ペット可</label>
<input type="checkbox" id="search-other[5]"><label for="search-other[5]" class="chkbox">バリアフリー</label>
<input type="checkbox" id="search-other[6]"><label for="search-other[6]" class="chkbox">喫煙可能</label>
<input type="checkbox" id="search-other[7]"><label for="search-other[7]" class="chkbox">禁煙</label>
<input type="checkbox" id="search-other[8]"><label for="search-other[8]" class="chkbox">喫煙所あり</label>
<input type="checkbox" id="search-other[9]"><label for="search-other[9]" class="chkbox">シニア</label>
<input type="checkbox" id="search-other[10]"><label for="search-other[10]" class="chkbox">お子様連れ</label>
</div>

        </div>


    </li>
    </ul>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side05.png" width="30" height="30">キーワード</p>
<p>
<input type="text" placeholder="おしゃれ 京都 駅チカ 町家">
</p>
<p>
<input type="submit" value="絞り込む">
</p>
</li>
</ul>
</form>
</aside>    

</article>
<script>
$(function() {
$(window).load(function() {
	var w = $(window).width();
	var head=815;
    var menu = $('#rightSide');
	if(w<1200){
		menu.hide(); 	
	}
	$(window).resize(function() {
		w = $(window).width();
		var ht = $(window).scrollTop();
		//console.log(w+":"+ht);
		if(w>=1200){
			menu.show();
			if(ht>head){
			menu.css({'position':'fixed','top':"0px"});
			}else{
			menu.css({'position':'absolute','top':head+'px'});	
			}		
		}else{
			menu.hide(); 
		}	
	});
	if($('#rightSide').length && w>=1200){
			var offset = menu.offset().top;
			var h = $(window).height();
			menu.css({'position':'absolute','top':head+'px'});    
			var position =head;
			var foot =$("#colophon").offset().top;
			$(window).scroll(function(){
				var scrollAmount = $(window).scrollTop();
				var newPosition = offset + scrollAmount;
				//console.log(scrollAmount+":"+foot);
					if(scrollAmount > position && scrollAmount<(foot-h/2)){
					menu.css({'position':'fixed','top':"0px"})
					}else{
					menu.css({'position':'absolute','top':head+'px'});				
					}
			});$('.search-icon,#rightSide-close').on('click',function () {
$("#rightSide").slideToggle("fast");
});	

	}

});	
});
</script>
@stop
