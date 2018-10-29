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

<article class="stay_container">
<link rel="stylesheet" type="text/css" href="/assets/css/stay.css">
<link rel="stylesheet" type="text/css" href="/assets/css/stay_details.css">
<section>
	<div class="main_img_box">
<img src="/assets/images/stay/stay_details_mv.jpg" width="1600" height="665">
	</div>
</section>
<section id="second_main">
	<nav>
		<ul id="fixedBox" class="main_nav cf">
			<li><a href="#overview">概要</a></li>
			<li><a href="#price">プラン</a></li>
			<li><a href="#price">詳細</a></li>
			<li><a href="#price">レビュー</a></li>
			<li><a href="#map">アクセス</a></li>
		</ul>
	</nav>
	<!-- /メインナビ終了 -->
	<div id="wrapper">

<!-- floating-menu　-->
			<div id="floating-menu">
<label id="rightSide-close" for="search-ck">×</label>
            <div class="pac">

				<div class="box_01 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-detail">
							<h3>\23,300～/泊</h3>
							<p>３％のポイントがたまる</p>
							<span class="fm_ttl"> 今すぐ予約可能なプランあり</span>
							<div class="yoyaku_btn">
								<a href="/whats_about">空き状況の確認／予約リクエスト</a> 
							</div>
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="side">
						<!-- 何かscriptかと思います　-->
						<ul>
							<li><a href=""><svg version="1.1" id="share" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path fill="#4B4B4B" d="M646.48,644.18c-0.108,0.109-0.21,0.222-0.307,0.338l-10.411-4.091c0.011-0.141,0.019-0.283,0.019-0.427
		c0-0.144-0.007-0.286-0.019-0.427l10.411-4.091c0.097,0.116,0.198,0.229,0.307,0.338c1.949,1.949,5.109,1.949,7.059,0
		c1.949-1.949,1.949-5.109,0-7.059c-1.949-1.949-5.109-1.949-7.059,0c-1.044,1.044-1.528,2.437-1.453,3.804l-10.41,4.09
		c-0.987-1.246-2.513-2.046-4.226-2.046c-2.977,0-5.39,2.413-5.39,5.39c0,2.977,2.413,5.391,5.39,5.391
		c1.713,0,3.238-0.801,4.226-2.047l10.411,4.091c-0.075,1.367,0.409,2.759,1.453,3.804c1.949,1.949,5.109,1.949,7.059,0
		s1.949-5.109,0-7.059S648.429,642.23,646.48,644.18z"/>
</svg>シェア</a></li>
						</ul>
					</div>
					<!-- /side　-->
				</div>

				<div class="box_01 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-detail">
							<h3>\7,500～/泊</h3>
							<p>３％のポイントがたまる</p>
							<span class="fm_ttl"> 今すぐ予約可能なプランあり</span>
							<div class="yoyaku_btn">
								<a href="/whats_about">空き状況の確認／予約リクエスト</a> 
							</div>
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="side">
						<!-- 何かscriptかと思います　-->
						<ul>
							<li><a href=""><svg version="1.1" id="share" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path fill="#4B4B4B" d="M646.48,644.18c-0.108,0.109-0.21,0.222-0.307,0.338l-10.411-4.091c0.011-0.141,0.019-0.283,0.019-0.427
		c0-0.144-0.007-0.286-0.019-0.427l10.411-4.091c0.097,0.116,0.198,0.229,0.307,0.338c1.949,1.949,5.109,1.949,7.059,0
		c1.949-1.949,1.949-5.109,0-7.059c-1.949-1.949-5.109-1.949-7.059,0c-1.044,1.044-1.528,2.437-1.453,3.804l-10.41,4.09
		c-0.987-1.246-2.513-2.046-4.226-2.046c-2.977,0-5.39,2.413-5.39,5.39c0,2.977,2.413,5.391,5.39,5.391
		c1.713,0,3.238-0.801,4.226-2.047l10.411,4.091c-0.075,1.367,0.409,2.759,1.453,3.804c1.949,1.949,5.109,1.949,7.059,0
		s1.949-5.109,0-7.059S648.429,642.23,646.48,644.18z"/>
</svg>シェア</a></li>
						</ul>
					</div>
					<!-- /side　-->
				</div>
                
				<!-- /box_01　-->
				<div class="box_02 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-logo"> <img src="/assets/mypage/img/logppink.png" alt="写真"> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h3 class="sub_discrpt">このスペースの管理者</h3>
							<h2 class="host_name">山本太郎</h2>
							<a class="blue_txt" href="">メッセージを送る</a> 
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="col3">
						<ul>
							<li>予約のしやすさ</li>
							<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
							<li>しやすい</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答率</li>
							<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
							<li>98.8％</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答時間</li>
							<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
							<li>数時間以内</li>
						</ul>
					</div>
					<!-- /col3　-->
				</div>
				<!-- /box　-->

<form>
<ul class="side-menu">
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side01p.png" width="30" height="30">検索条件</p>
<p><input type="text" placeholder="エリア　地名"></p>
<p><input type="text" placeholder="チェックイン・アウト"></p>
<p><input type="text" placeholder="宿泊人数"></p>
<p><input type="submit" value="絞り込む"></p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side02p.png" width="30" height="30">予約オプション</p>
<p><input type="checkbox" id="search-option[1]"><label for="search-option[1]" class="chkbox">今すぐ予約可能</label></p>
<p><input type="checkbox" id="search-option[2]"><label for="search-option[2]" class="chkbox">直前割プラン</label></p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side03p.png" width="30" height="30">キャンペーン</p>
<p>Comming soon</p>
</li>
<li>
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side04p.png" width="30" height="30">予算</p>
<div class="yen">
下限なし 　 円～　上限なし　　円～
</div>
    <ul class="yosan">
    <li>
        <p class="side-sub-title">お部屋タイプ</p>
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
<p class="sideTitle"><img src="/assets/images/stay/stay_icon_side05p.png" width="30" height="30">キーワード</p>
<p>
<input type="text" placeholder="おしゃれ 京都 駅チカ 町家">
</p>
<p>
<input type="submit" value="絞り込む">
</p>
</li>
</ul>
</form>                
            </div>    
			</div>
			<!-- /floating-menu　-->
    
		<div id="overview" class="main_wrapper cf">
			<div class="ttl_box">
				<div class="main_ttl">Sunny House 陽だまりの家</div>
				<div class="star_box"> <span class="star three"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span> 0件 </div>
				<div class="service-box cf">
					<div class="sub-ttl_box"> <span class="gray_txt">&#9632;</span>陽だまりの家</div>
					<div class="spec_box"><img src="/assets/mypage/img/man.png" alt="写真">1～10人</div>
					<div class="eria_box"><img src="/assets/mypage/img/pin.png" alt="写真">埼玉県</div>
				</div>
			</div>
			
		</div>
		<!-- /w main_wrapper　-->
		<div class="gray cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>スペースについて</h3>
					</div>
<div class="txt">
&lt;空間&gt;<br>
創業明治38年、老舗の岡野工務店が施工した自慢のモデルハウス
一軒家まるまる貸切でご利用いただけます<br>
</div>
<input type="checkbox" id="std01" class="chk-more">
<label for="std01" class="chk-more-label">続きを読む▼</label>
<div class="txt more">
日常の喧騒を離れ、穏やかな時間を過ごす<br>
ナチュラルに、シンプルに、環境にも人にもやさしく暮らす<br>
そんな想いで創り上げた「陽だまりの家」です<br>
<br>
&lt;動画&gt;<br>
陽だまりの家 Sunny House<br>
https://youtu.be/2CpdSoyg2PA<br>
<br>
&lt;実績 ロケ撮影&gt;<br>
花王様「2018年春のしあわせ咲く咲くフェア」<br>
https://youtu.be/CAC83BSTUUw<br>
その他、ポートレート・商品撮影などで利用実績多数<br>
<br>
&lt;アクセス&gt;
-車の場合-<br>
圏央道 川島/桶川加納ICから11km<br>
関越道 東松山ICから12km<br>
東北道 羽生ICから19km<br>
-電車の場合-<br>
鴻巣駅から3km(高崎線/湘南新宿ライン)<br>
タクシー/バスで10分 
</div>

				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>設備・サービス</h3>
					</div>

                <div class="txt">
                &lt;無料備品&gt;<br>
						<ul>
							<li class="col3">テーブル</li>
							<li class="col3">椅子</li>
							<li class="col3">プロジェクター</li>
							<li class="col3">駐車場</li>
							<li class="col3">WIFI</li>
							<li class="col3">ホワイトボード</li>
							<li class="col3">プリンター</li>
							<li class="col3">キッチン設備</li>
							<li class="col3 is-none">調理機材</li>
						</ul>
					</div>
<input type="checkbox" id="std02" class="chk-more">
<label for="std02" class="chk-more-label">続きを読む▼</label>
<div class="txt more">
						<ul>
							<li class="col3 is-none">テレビ</li>
							<li class="col3 is-none">ロッカー</li>
							<li class="col3 is-none">ケータリング</li>
							<li class="col3">バー</li>
							<li class="col3 is-none">音響設備</li>
							<li class="col3 is-none">ミラー</li>
							<li class="col3">シャワー</li>
							<li class="col3">更衣室</li>
							<li class="col3">照明設備</li>
							<li class="col3">写真撮影機材</li>
							<li class="col3">動画撮影機材</li>
							<li class="col3">公共交通機関</li>
							<li class="col3">トイレ</li>
							<li class="col3 is-none">冷蔵庫</li>
							<li class="col3 is-none">電源</li>
							<li class="col3 is-none">冷暖房</li>
							<li class="col3 is-none">タオル</li>
							<li class="col3 is-none">石鹸</li>
							<li class="col3 is-none">歯ブラシ</li>
							<li class="col3 is-none">シャンプー・リンス</li>
							<li class="col3">ドライヤー</li>
							<li class="col3">バスタブ</li>
							<li class="col3">洗濯機</li>
							<li class="col3">乾燥機</li>
							<li class="col3">アイロン</li>
							<li class="col3">周辺に飲食店</li>
							<li class="col3">スーパー・コンビニ</li>
							<li class="col3">バリアフリー</li>
							<li class="col3">飲酒可</li>
							<li class="col3">ペット可</li>
							<li class="col3">子連れ可</li>
							<li class="col3">喫煙可</li>
						</ul>
<p class="cleat">&nbsp;</p>
<p class="cleat">&nbsp;</p>
&lt;特徴&gt;<br>
都内から最短60分 / 新築モデルハウス / 広々空間140㎡ / 3LDK+2Loft / 冷暖房ばっちり / アメニティ豊富 / 中庭でBBQ / 充実のキッチン / 水回り清潔 / 駐車場4台無料 / 高速Wi-Fi / 10台同時接続可 / 最大90Mbps<br>
<br>
&lt;主な備品 ＊はオプション&gt;<br>
・イス×6脚<br>
・丸イス×10脚<br>
・テレビ2台(HDMI接続可)<br>
・Wi-Fi(同時接続10台可)<br>
＊プロジェクター<br>
＊80インチ スクリーン<br>
＊キッチン備品一式<br>
＊BBQセット<br>
＊ゴミ袋<br>
＊布団セット<br>
＊タオルセット<br>
<br>
&lt;こんな方にオススメ&gt;<br>
友達とパーティ / BBQ / みんなで料理 / 車でプチ遠出 / 動画撮影 / ポートレート撮影 / 商品撮影 / コスプレ会 / ボードゲーム / リモートワーク / 経営会議 / 開発合宿<br>
<br>
&lt;買い出し&gt;<br>
セブンイレブン 車で2分<br>
メガ ドンキホーテ北鴻巣店 車で5分<br>
<br>
&lt;損害賠償・違約金請求&gt;<br>
万が一ではございますが、家財破損や規約違反などがあった場合、<br>
毅然とした態度で、損害賠償や違約金の請求をします。
</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>時間レンタル</h3>
					</div>
					<div class="txt">
                    利用可能な<label for="std03" class="chk-more-label-in">レンタルスペースで詳細を見る</label>
					</div>
<input type="checkbox" id="std03" class="chk-more">
<div class="txt more">
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細レンタルスペース詳細<br>
レンタルスペース詳細レンタルスペース詳細<br>
</div>                    

				</div>
				<!-- /col_wrapper　-->
			</div>
            
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>プラン一覧</h3>
					</div>
					<div class="w-box">
                    <h3>一軒家貸切　宿泊プラン</h3>
                    <p class="txtR">
                    <span class="cost">\23,300/泊～</span>
                    </p>
                    </div>
				</div>
				<!-- /col_wrapper　-->
			</div>

			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>広さ</h3>
					</div>
					<div class="txt">10m&#178;</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>収容人数</h3>
					</div>
					<div class="txt">&#8764;5人</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>チェックイン</h3>
					</div>
					<div class="txt">6時&#8764;24時</div>
				</div>
				<!-- /col_wrapper　-->
			</div>


			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>アメニティ</h3>
					</div>
					<div class="txt">
						<ul>
							<li class="col3">アメニティ</li>
							<li class="col3">テーブル</li>
							<li class="col3">椅子</li>
							<li class="col3">プロジェクター</li>
							<li class="col3">駐車場</li>
							<li class="col3">WIFI</li>
							<li class="col3">ホワイトボード</li>
							<li class="col3">プリンター</li>
							<li class="col3">キッチン設備</li>
                        </ul>
                    </div>    
<input type="checkbox" id="std04" class="chk-more">
<label for="std04" class="chk-more-label">続きを読む▼</label>
					<div class="txt more">                        
                        <ul>    
							<li class="col3 is-none">調理機材</li>
							<li class="col3 is-none">テレビ</li>
							<li class="col3 is-none">ロッカー</li>
							<li class="col3 is-none">ケータリング</li>
							<li class="col3">バー</li>
							<li class="col3 is-none">音響設備</li>
							<li class="col3 is-none">ミラー</li>
							<li class="col3">シャワー</li>
							<li class="col3">更衣室</li>
							<li class="col3">照明設備</li>
							<li class="col3">写真撮影機材</li>
							<li class="col3">動画撮影機材</li>
							<li class="col3">公共交通機関</li>
							<li class="col3">トイレ</li>
							<li class="col3 is-none">冷蔵庫</li>
							<li class="col3 is-none">電源</li>
							<li class="col3 is-none">冷暖房</li>
							<li class="col3 is-none">タオル</li>
							<li class="col3 is-none">石鹸</li>
							<li class="col3 is-none">歯ブラシ</li>
							<li class="col3 is-none">シャンプー・リンス</li>
							<li class="col3">ドライヤー</li>
							<li class="col3">バスタブ</li>
							<li class="col3">洗濯機</li>
							<li class="col3">乾燥機</li>
							<li class="col3">アイロン</li>
							<li class="col3">周辺に飲食店</li>
							<li class="col3">スーパー・コンビニ</li>
							<li class="col3">バリアフリー</li>
							<li class="col3">飲酒可</li>
							<li class="col3">ペット可</li>
							<li class="col3">子連れ可</li>
							<li class="col3">喫煙可
						</ul>
					</div>
				</div>
			</div>


			<div class="main_wrapper cf">
				<div class="col_wrapper cf">
					<div class="ttl_box2">
						<h3>飲食について</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
			</div>

			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>後片付け・<br> ゴミについて</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
			</div>
			
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>添付ファイル</h3>
					</div>
					<div class="txt"></div>
				</div>
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>お支払い方法</h3>
					</div>
					<div class="txt">
						<div class="pay_list"> クレジットカード<br> 銀行振込<span class="small_txt">※法人利用のみ</span><br> <a class="blue_txt" href="">もっと詳しく</a> </div>
						<div
							class="card_img">
							<ul>
								<li><img src="/assets/mypage/img/card001.png" alt="写真"></li>
								<li><img src="/assets/mypage/img/card002.png" alt="写真"></li>
								<li><img src="/assets/mypage/img/card003.png" alt="写真"></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper cf">
					<div class="ttl_box2">
						<h3>注意事項</h3>
					</div>
					<div class="txt"> <a class="blue_txt" href="">キャンセルポリシー</a> <a class="blue_txt" href="">ゲスト規約</a> <a class="blue_txt" href="">もっと詳しく</a>            </div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper cf">
					<div class="ttl_box2">
						<h3>お問合せ</h3>
					</div>
					<div class="txt"> <a class="blue_txt" href="">空き状況の確認</a> <a class="blue_txt" href="">スペースへのお問合せ</a> </div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper cf">
					<div class="ttl_box2">
						<h3>写真一覧</h3>
					</div>
					<div class="txt pic_box">
                    <img src="/assets/images/stay/stay_details_img01.jpg">
                    </div>
				</div>
				<!-- /col_wrapper　-->
			</div>
<p class="clear">&nbsp;</p>
			<!-- /main_wrapper　-->
			<!--
			<div id="price" class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>価格</h3>
					</div>
					<div class="txt">
											</div>
				</div>
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper last  cf">
					<div class="ttl_box2">
						<h3>追加料金<br> （オプション）</h3>
					</div>
					<div class="txt">
						<h3>設備サービス</h3>
						<div class="plan_ttl_box cf">
							<h3>インターネット無料</h3>
							<div class="button-box_wrap cf">
								<div class="plan-button-box"> <a href="" class="button-white">＋&yen;0／</a></div>
							</div>
						</div>
						<div class="plan_txt"> せつめいせつめいせつめいせつめいせつめいせつめい</div>
						<div class="plan_ttl_box cf">
							<h3>ホワイトボード</h3>
							<div class="button-box_wrap cf">
								<div class="plan-button-box"> <a href="" class="button-white">＋&yen;0／</a></div>
							</div>
						</div>
						<div class="plan_txt"> せつめいせつめいせつめいせつめいせつめいせつめい</div>
						<div class="plan_ttl_box cf">
							<h3>大型モニター</h3>
							<div class="button-box_wrap cf">
								<div class="plan-button-box"> <a href="" class="button-white">＋&yen;0／</a></div>
							</div>
						</div>
						<div class="plan_txt"> せつめいせつめいせつめいせつめいせつめいせつめい</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /#wrapper　-->
		<!-- グラフ  -->
		<!--div class="white cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper cf last">
					<h3 class="sub_discrpt">このスペースはこんな用途で使われています</h3>
					<ul>
						<li class="space-main__usage-list">
							<p class="space-main__usage-name">会議</p>
							<p class="space-main__usage-graph"><span class="js-space-main__usage-graph-content space-main__usage-graph-content" style="width: 71%;"></span></p>
							<p class="space-main__usage-per">71％</p>
						</li>
						<li class="space-main__usage-list">
							<p class="space-main__usage-name">その他</p>
							<p class="space-main__usage-graph"><span class="js-space-main__usage-graph-content space-main__usage-graph-content" style="width: 18%;"></span></p>
							<p class="space-main__usage-per">18％</p>
						</li>
						<li class="space-main__usage-list">
							<p class="space-main__usage-name">写真撮影</p>
							<p class="space-main__usage-graph"><span class="js-space-main__usage-graph-content space-main__usage-graph-content" style="width: 9%;"></span></p>
							<p class="space-main__usage-per">9％</p>
						</li>
						<li class="space-main__usage-list">
							<p class="space-main__usage-name">パーティー</p>
							<p class="space-main__usage-graph"><span class="js-space-main__usage-graph-content space-main__usage-graph-content" style="width: 2%;"></span></p>
							<p class="space-main__usage-per">2％</p>
						</li>
					</ul>
				</div>
			</div>
		</div-->
		<!-- /#wrapper　-->
		<!-- /グラフ  -->
		<!-- レビュー  -->
		<div class="gray cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper cf last">
					<h3>評価とレビュー</h3>
					<div class="txt">
                    
					<div class="review_wrap">
						<div class="review_line cf">
							<div class="review_img_box"> <img src="/assets/mypage/img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
								<span class="star four"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>
            					<!-- /user_info　-->
								<p>感想かんそう感想かんそう感想かんそう感想かんそう感想かんそう感想</p>
							</div>
							<!-- /review_txt_box　-->
						</div>
						<!-- /review_line　-->
						<div class="review_line cf">
							<div class="review_img_box"> <img src="/assets/mypage/img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
                                <span class="star three"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>
								<!-- /user_info　-->
								<p>感想かんそう感想かんそう感想かんそう感想かんそう感想かんそう感想</p>
							</div>
							<!-- /review_txt_box　-->
						</div>
						<!-- /review_line　-->
						<div class="review_line last cf">
							<div class="review_img_box"> <img src="/assets/mypage/img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
                                <span class="star two"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>
								<!-- /user_info　-->
								<p>感想かんそう感想かんそう感想かんそう感想かんそう感想かんそう感想</p>
							</div>
							<!-- /review_txt_box　-->
						</div>
						<!-- /review_line　-->
					</div>
					<!-- /review_wrap　-->
					<div class="pv_more_btn"> <a href="">レビューをもっと見る</a></div>
				</div>
                
                </div>
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- レビュー  -->
		<!-- このスペースの管理者  -->
		<div class="white cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper cf last">
					<h3>このスペースの管理者</h3>
					<div class="host-detail_wrap cf">
						<div class="main__host-logo"> <img src="/assets/mypage/img/logppink.png" alt="写真"> <span class="small_txt day">登録日 2017／４／８</span> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h2 class="host_name">山本太郎</h2>
							<div class="col3 long">
								<ul>
									<li>予約のしやすさ</li>
									<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
									<li>しやすい</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
							<div class="col3">
								<ul>
									<li>返答率</li>
									<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
									<li>98.8％</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
							<div class="col3">
								<ul>
									<li>返答時間</li>
									<li><img src="/assets/mypage/img/maru.png" alt="写真"></li>
									<li>数時間以内</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
						</div>
						<!-- /main__host-detail　-->
					</div>
					<div class="txt">説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい</div>
                    
<input type="checkbox" id="std05" class="chk-more">
<label for="std05" class="chk-more-label">もっと詳しく▼</label>
<div class="txt more">
説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい<br>
説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい<br>
説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい<br>
説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい<br>
説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい
</div>
                    
					<div class="txt">
                    <div class="authentication">
						<div class="logo"> <img src="/assets/mypage/img/logogreen.png" alt="写真"> </div>
						<div class="massage">
							サービス名によって認証されたスペースオーナーです。
							<ul>
								<li>メールアドレス</li>
								<li>電話番号</li>
							</ul>
						</div>
					</div>
                    </div>
					<!-- /_authentication　-->
				</div>
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- このスペースの管理者  -->
		<div id="map">
        <img src="/assets/images/stay/stay_details_img02.jpg">
        </div>
		
		<!-- map  -->
		<!-- 所在地  -->
		<div class="map_adress cf">
			<div class="main_wrapper cf">
				<div class="adress_wrap">
					<div class="adress_box cf">
						<h3 class="access-title">住所</h3>
						<p class="access-content">東京都新宿区</p>
					</div>
					<!-- /adress_box　-->
					<div class="adress_box cf">
						<h3 class="access-title">アクセス</h3>
						<p class="access-content">新宿駅より徒歩一歩</p>
					</div>
				</div>
				<!-- /adress_wrap　-->
				<div class="gm_btn"> <a target="_blank" href="https://www.google.co.jp/maps/?q=35.688747406006,139.70135498047">Google Mapで見る</a> </div>
				<!-- /gm_btn　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- /map_adress　-->
		<!-- /所在地  -->
		<!-- スポット  -->
		<div id="relation" class="main_wrapper cf pd">
			<div class="col_wrapper cf last">
				<h3>このスペース周辺の人気スペース</h3>
				<div id="slide" class="list_wrap cf">
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="/assets/mypage/img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="/assets/mypage/img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p>1～16人 ○○都〇〇区　<span class="star four"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="/assets/mypage/img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="/assets/mypage/img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p>1～16人 ○○都〇〇区　<span class="star three"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="/assets/mypage/img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="/assets/mypage/img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p>1～16人 ○○都〇〇区　<span class="star one"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
				</div>
			</div>
			<!-- /col_wrapper　-->
		</div>
		<!-- /main_wrapper　-->
		<!-- /スポット  -->
	</div>
	</div>
</section>
</article>
<script>
$(function() {

$(window).load(function() {
	var w = $(window).width();
	var head=565;
    var menu = $('#floating-menu');
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
			menu.css({'position':'absolute','top':'0px'});	
			}		
		}else{
			menu.hide();
			menu.css({'position':'fixed','top':"0px",'right':"0px"}); 
		}	
	});
	if($('#floating-menu').length && w>=1200){
			var offset = menu.offset().top;
			var h = $(window).height();
			menu.css({'position':'absolute','top':'0px'});    
			var position =head;
			var foot =$("#colophon").offset().top;
			$(window).scroll(function(){
				var scrollAmount = $(window).scrollTop();
				var newPosition = offset + scrollAmount;
				//console.log(scrollAmount+":"+foot);
					if(scrollAmount > position && scrollAmount<(foot-h)){
					menu.css({'position':'fixed','top':"0px"})
					}else{
					menu.css({'position':'absolute','top':'0px'});				
					}
			});
	}

$('.search-icon,#rightSide-close').on('click',function () {
$("#floating-menu").slideToggle("fast");
});	
});
});

</script>
@stop
