@extends('layouts.master')
@section('content')
<div class="breadcrumb">
	<div class="inner">
		<ol>
			<li><a href="#">ホーム</a></li>
			<li><a href="#">東京都</a></li>
			<li><a href="#">渋谷区</a></li>
			<li><a href="#">会議室</a></li>
			<li>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</li>
		</ol>
	</div>
</div>
<!-- /breadcrumb -->
<section>
	<div class="main_img_box">
		<img src="img/main_img.jpg" alt="写真">
		<div class="look_btn"> <a href="">
			写真を見る</a>
		</div>
	</div>
</section>
<section id="second_main">
	<nav>
		<ul id="fixedBox" class="main_nav cf">
			<li><a href="#">概要</a></li>
			<li><a href="#">価格</a></li>
			<li><a href="#">アクセス</a></li>
			<li><a href="#">関連</a></li>
		</ul>
	</nav>
	<!-- /メインナビ終了 -->
	<div id="wrapper">
		<div class="main_wrapper cf">
			<div class="ttl_box">
				<div class="main_ttl"> タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル </div>
				<div class="star_box"> <img src="img/star.jpg" alt="写真"> 166件 </div>
				<div class="service-box cf">
					<div class="sub-ttl_box"> <span class="gray_txt">&#9632;</span> タイトルタイトルタイトルタイトルタイトルタイトルタイトル</div>
					<div class="spec_box"><img src="img/man.png" alt="写真"> 〜16人</div>
					<div class="eria_box"><img src="img/pin.png" alt="写真"> 東京都渋谷区</div>
					<div class="use_box"><span class="gray_txt">&#9632;</span> 貸し会議室</div>
				</div>
			</div>
			<!-- floating-menu　-->
			<div id="floating-menu">
				<div class="box_01 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-detail">
							<h3>&yen;400〜&yen;2,400／<span class="small_time">時間</span></h3>
							<p>３％のポイントがたまる</p>
							<span class="fm_ttl"><i class="fa fa-flash fa-lg"></i> 今すぐ予約可能なプランあり</span>
							<div class="yoyaku_btn">
								<a href="">空き状況の確認／予約リクエスト</a> 
							</div>
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="side">
						<!-- 何かscriptかと思います　-->
						<ul>
							<li class="fav"><a href=""><i class="fa fa-heart"></i> お気に入り</a></li>
							<li><a href=""><i class="fa fa-share-alt"></i>シェア</a></li>
						</ul>
					</div>
					<!-- /side　-->
				</div>
				<!-- /box_01　-->
				<div class="box_02 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-logo"> <img src="img/logppink.png" alt="写真"> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h3 class="sub_discrpt">このスペースの管理者</h3>
							<h2 class="host_name">○○○○株式会社</h2>
							<a class="blue_txt" href="">メッセージを送る</a> 
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="col3">
						<ul>
							<li>予約のしやすさ</li>
							<li><img src="img/maru.png" alt="写真"></li>
							<li>しやすい</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答率</li>
							<li><img src="img/maru.png" alt="写真"></li>
							<li>98.8％</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答時間</li>
							<li><img src="img/maru.png" alt="写真"></li>
							<li>数時間以内</li>
						</ul>
					</div>
					<!-- /col3　-->
				</div>
				<!-- /box　-->
			</div>
			<!-- /floating-menu　-->
		</div>
		<!-- /w main_wrapper　-->
		<div class="gray cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>会場について</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>設備・サービス</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>利用可能な用途</h3>
					</div>
					<div class="txt"> <span class="use blue">パーティー</span> <span class="use blue">会議・研修</span> <span class="use blue">写真撮影</span>
						<span
							class="use blue">ロケ撮影</span> <br> <span class="use blue">個展・展示会</span> <span class="use blue">オフィス</span> <span class="use blue">その他</span>                
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>広さ</h3>
					</div>
					<div class="txt">２５m&#178;</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>収容人数</h3>
					</div>
					<div class="txt">&#8764;１６人</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>営業時間</h3>
					</div>
					<div class="txt">6時&#8764;24時</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>添付ファイル</h3>
					</div>
					<div class="txt"></div>
				</div>
				<!-- /col_wrapper　-->
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
								<li><img src="img/card001.png" alt="写真"></li>
								<li><img src="img/card002.png" alt="写真"></li>
								<li><img src="img/card003.png" alt="写真"></li>
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
						<div class="pic"><img src="img/picsample.jpg" alt="写真"></div>
						<div class="pic"><img src="img/picsample.jpg" alt="写真"></div>
						<div class="pic"><img src="img/picsample.jpg" alt="写真"></div>
						<div class="pic"><img src="img/picall.jpg" alt="写真"></div>
					</div>
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
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper cf">
					<div class="ttl_box2">
						<h3>飲食について</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>後片付け・<br> ゴミについて</h3>
					</div>
					<div class="txt">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>価格</h3>
					</div>
					<div class="txt">
						<div class="plan_ttl_box cf">
							<h3>プラン1　<span><i class="fa fa-flash fa-lg"></i> 今すぐ予約</span></h3>
							<div class="button-box_wrap cf">
								<div class="plan-button-box">
									<a href="" class="button-blue">&yen;500／<span class="small_time">時間〜</span></a>
								</div>
							</div>
						</div>
						<div class="plan_txt"> せつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめい せつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめい</div>
						<div class="plan_ttl_box cf">
							<h3>プラン2　<span><i class="fa fa-flash fa-lg"></i> 今すぐ予約</span></h3>
							<div class="button-box_wrap cf">
								<div class="plan-button-box">
									<a href="" class="button-blue">&yen;500／<span class="small_time">時間〜</span></a>
								</div>
							</div>
						</div>
						<div class="plan_txt"> せつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめい せつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめい</div>
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
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
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- /#wrapper　-->
		<!-- グラフ  -->
		<div class="white cf">
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
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- /#wrapper　-->
		<!-- /グラフ  -->
		<!-- レビュー  -->
		<div class="gray cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper cf last">
					<h3 class="sub_discrpt">評価とレビュー</h3>
					<div class="star_box"><img src="img/stars2.png" alt="写真"> 4.4 <span class="small_txt blue">166件</span></div>
					<div class="review_wrap">
						<div class="review_line cf">
							<div class="review_img_box"> <img src="img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
								<!-- /user_info　-->
								<p>感想かんそう感想かんそう感想かんそう感想かんそう感想かんそう感想</p>
							</div>
							<!-- /review_txt_box　-->
						</div>
						<!-- /review_line　-->
						<div class="review_line cf">
							<div class="review_img_box"> <img src="img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
								<!-- /user_info　-->
								<p>感想かんそう感想かんそう感想かんそう感想かんそう感想かんそう感想</p>
							</div>
							<!-- /review_txt_box　-->
						</div>
						<!-- /review_line　-->
						<div class="review_line last cf">
							<div class="review_img_box"> <img src="img/cust.png" alt="写真"> </div>
							<!-- /review_img_box　-->
							<div class="review_txt_box">
								<div class="user_name">
									<h3>名字山　名前太郎</h3>
								</div>
								<!-- /user_name　-->
								<div class="user_info"> 2018年04月実施　利用目的：会議・研修　利用人数：12人 </div>
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
				<!-- /col_wrapper　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- レビュー  -->
		<!-- このスペースの管理者  -->
		<div class="white cf">
			<div class="main_wrapper cf">
				<div class="col_wrapper cf last">
					<h3 class="sub_discrpt">このスペースの管理者</h3>
					<div class="host-detail_wrap cf">
						<div class="main__host-logo"> <img src="img/logppink.png" alt="写真"> <span class="small_txt day">登録日 2017／４／８</span> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h2 class="host_name">○○○○株式会社</h2>
							<div class="col3 long">
								<ul>
									<li>予約のしやすさ</li>
									<li><img src="img/maru.png" alt="写真"></li>
									<li>しやすい</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
							<div class="col3">
								<ul>
									<li>返答率</li>
									<li><img src="img/maru.png" alt="写真"></li>
									<li>98.8％</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
							<div class="col3">
								<ul>
									<li>返答時間</li>
									<li><img src="img/maru.png" alt="写真"></li>
									<li>数時間以内</li>
								</ul>
							</div>
							<!-- /<div class="col3">　-->
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい <a class="blue_txt" href="">もっと詳しく</a>
					<div class="authentication cf">
						<div class="logo"> <img src="img/logogreen.png" alt="写真"> </div>
						<div class="massage">
							サービス名によって認証されたスペースオーナーです。
							<ul>
								<li>メールアドレス</li>
								<li>電話番号</li>
							</ul>
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
			<!-- googlemapのapiを使うと思うのでサンプルで入れておきます　--><img src="img/map.png" alt="写真"> 
		</div>
		<!-- map  -->
		<!-- 所在地  -->
		<div class="map_adress cf">
			<div class="main_wrapper cf">
				<div class="adress_wrap">
					<div class="adress_box cf">
						<h3 class="access-title">住所</h3>
						<p class="access-content">東京都渋谷区○△□町０−０−０</p>
					</div>
					<!-- /adress_box　-->
					<div class="adress_box cf">
						<h3 class="access-title">アクセス</h3>
						<p class="access-content">JR○△駅南口より徒歩5分</p>
					</div>
				</div>
				<!-- /adress_wrap　-->
				<div class="gm_btn"> <a href="">Google Mapで見る</a> </div>
				<!-- /gm_btn　-->
			</div>
			<!-- /main_wrapper　-->
		</div>
		<!-- /map_adress　-->
		<!-- /所在地  -->
		<!-- スポット  -->
		<div class="main_wrapper cf pd">
			<div class="col_wrapper cf last">
				<h3>このスペース周辺の人気スペース</h3>
				<div id="slide" class="list_wrap cf">
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="img/man.png" alt="写真">～16人 ○○都〇〇区　<img src="img/star.jpg" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="img/man.png" alt="写真">～16人 ○○都〇〇区　<img src="img/star.jpg" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="img/samplepic_slid0.png" alt="写真"> <img class="icon_h" src="img/hert.png" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="img/man.png" alt="写真">～16人 ○○都〇〇区　<img src="img/star.jpg" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<div class="pre"><img src="img/arrow01.png" alt="写真"></div>
					<div class="next"><img src="img/arrow02.png" alt="写真"></div>
				</div>
			</div>
			<!-- /col_wrapper　-->
		</div>
		<!-- /main_wrapper　-->
		<!-- /スポット  -->
	</div>
</section>
<!-- /main　-->
@stop

@section('script')
<script>
$(document).ready(function () {
	var menu = $('div#floating-menu');
	var offset = menu.offset().top;

	var position = 150; // 固定する画面での座標位置(ピクセルで指定)
	var coodinates = menu.css('top'); // CSSのtopに指定した値を保存
	var origPos = menu.css('position'); // CSSのpositionの値を一時的に保存

	//スクロール時のイベント処理
	$(window).scroll(function () {
		var scrollAmount = $(window).scrollTop();
		var newPosition = offset + scrollAmount;

		// CSSの設定を変更してメニューを固定化する
		if (scrollAmount > offset - position) {
			menu.css('position', 'fixed')
			menu.css('top', position + "px")
		} else { // 固定化したメニューを最初の状態に戻している
			menu.css('position', origPos)
			menu.css('top', coodinates)
		}

	});
});
</script>
<script>
jQuery(function ($) {

	var nav = $('#fixedBox'),
		offset = nav.offset();

	$(window).scroll(function () {
		if ($(window).scrollTop() > offset.top) {
			nav.addClass('fixed');
		} else {
			nav.removeClass('fixed');
		}
	});

});
</script>
@stop
