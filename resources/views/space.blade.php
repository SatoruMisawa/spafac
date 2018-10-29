@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/search.css">
<label id="angle-right">
空き状況確認・予約リクエスト
<svg version="1.1" id="angle-right-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="40px" height="40px" viewBox="620 620 40 40" enable-background="new 620 620 40 40" xml:space="preserve">
<path fill="#0085BA" d="M652.029,642.125l-16.995,16.994c-1.175,1.174-3.074,1.174-4.236,0l-2.824-2.824
	c-1.174-1.175-1.174-3.074,0-4.236l12.046-12.046l-12.046-12.046c-1.174-1.175-1.174-3.074,0-4.236l2.812-2.849
	c1.174-1.174,3.074-1.174,4.236,0l16.995,16.995C653.203,639.05,653.203,640.949,652.029,642.125z"/>
</svg>
</label>
<div class="breadcrumb">
	<div class="inner">
		<ol>
			<li><a href="<?php echo url(''); ?>">ホーム</a></li>
			<li><a href="#"><?php echo e($space->institution->prefecture->name); ?></a></li>
			<li><a href="#"><?php echo e($space->institution->address1); ?></a></li>
			<li><a href="#"><?php echo e($space->institution->institutionKind->name); ?></a></li>
			<li><?php echo e($space->title); ?></li>
		</ol>
	</div>
</div>
<!-- /breadcrumb -->
<section>

	<div class="main_img_box">
		<?php foreach ($space->getSpacePhotos() as $spacePhoto) : ?>
			<img src="<?php echo url('space/media', [$spacePhoto->media_id, 1579, 479, true]); ?>" alt="写真">
			<?php break; ?>
		<?php endforeach; ?>
		<div class="main-look">
			<div class="look_btn"> <a href="">
				写真を見る</a>
			</div>
		</div>
	</div>
</section>
<section id="second_main">
	<!-- /メインナビ終了 -->
	<div id="wrapper">

		<div id="overview" class="main_wrapper cf">
			<div class="ttl_box">
				<div class="main_ttl"> <?php echo e($space->title); ?></div>
				<div class="star_box"> <img src="<?php echo url('assets/mypage/img/star.jpg'); ?>" alt="写真"> 000件 </div>
				<div class="service-box cf">
					<div class="sub-ttl_box"> <span class="gray_txt">&#9632;</span> <?php echo e($space->institution->name); ?></div>
					<div class="spec_box"><img src="<?php echo url('assets/mypage/img/man.png'); ?>" alt="写真"> ～<?php echo e($space->capacity); ?>人</div>
					<div class="eria_box"><img src="<?php echo url('assets/mypage/img/pin.png'); ?>" alt="写真"> <?php echo e($space->institution->getShortAddress()); ?></div>
					<div class="use_box"><span class="gray_txt">&#9632;</span> <?php echo e($space->institution->institutionKind->name); ?></div>
				</div>
			</div>
			<!-- floating-menu　-->
			<div id="floating-menu">
        <ul id="fixedBox" class="main_nav cf">
			<li><a href="#overview">概要</a></li>
			<li><a href="#price">価格</a></li>
			<li><a href="#map">アクセス</a></li>
			<li><a href="#relation">関連</a></li>
            <li id="w_close">×</li>
		</ul>            
				<div class="box_01 cf">
                	<div class="host-detail_wrap cf">
						<div class="main__host-detail">
							<h3><?php echo $space->getPriceRange(); ?></h3>
							<span class="fm_ttl">今すぐ予約可能なプランあり</span>
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
							<li class="fav"><a href=""><i class="fa fa-heart"></i> お気に入り</a></li>
							<li><a href=""><i class="fa fa-share-alt"></i>シェア</a></li>
						</ul>
					</div>
					<!-- /side　-->
				</div>
				<!-- /box_01　-->
				<div class="box_02 cf">
					<div class="host-detail_wrap cf">
						<div class="main__host-logo"> <img src="<?php echo url('assets/mypage/img/logppink.png'); ?>" alt="写真"> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h3 class="sub_discrpt">このスペースの管理者</h3>
							<h2 class="host_name"><?php echo e($space->host->getName()); ?></h2>
							<a class="blue_txt" href="">メッセージを送る</a> 
						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->
					<div class="col3">
						<ul>
							<li>予約のしやすさ</li>
							<li><span class="star three"></span></li>
							<li>しやすい</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答率</li>
							<li><span class="star five"></span></li>
							<li>98.8％</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答時間</li>
							<li><span class="star four"></span></li>
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
					<div class="txt"><?php echo nl2br(e($space->explanation)); ?></div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>設備・サービス</h3>
					</div>
					<div class="txt"><?php echo nl2br(e($space->facility)); ?></div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>利用可能な用途</h3>
					</div>
					<div class="txt">
						<?php foreach ($space->getSpacePurposes() as $spacePurpose) : ?>
							<span class="use blue"><?php echo e($spacePurpose->purpose->name); ?></span>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>広さ</h3>
					</div>
					<div class="txt"><?php echo e(number_format($space->floor_space)); ?>m&#178;</div>
				</div>
				<!-- /col_wrapper　-->
			</div>
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>収容人数</h3>
					</div>
					<div class="txt">&#8764;<?php echo e(number_format($space->capacity)); ?>人</div>
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
			<!--
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>添付ファイル</h3>
					</div>
					<div class="txt"></div>
				</div>
			</div>
			-->
			<div class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>お支払い方法</h3>
					</div>
					<div class="txt">
						<div class="pay_list"> クレジットカード<br> 銀行振込<br> <a class="blue_txt" href="">もっと詳しく</a> </div>
						<div
							class="card_img">
							<ul>
								<li><img src="<?php echo url('assets/mypage/img/card001.png'); ?>" alt="写真"></li>
								<li><img src="<?php echo url('assets/mypage/img/card002.png'); ?>" alt="写真"></li>
								<li><img src="<?php echo url('assets/mypage/img/card003.png'); ?>" alt="写真"></li>
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
						<?php foreach ($space->getSpacePhotos() as $spacePhoto) : ?>
							<div class="pic"><img src="<?php echo url('space/media', [$spacePhoto->media_id, 210, 210, true]); ?>" alt="写真"></div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- /col_wrapper　-->
			</div>

			<!-- /main_wrapper　-->
			<div id="price" class="main_wrapper cf">
				<div class="col_wrapper  cf">
					<div class="ttl_box2">
						<h3>価格</h3>
					</div>
					<div class="txt">
						<?php foreach ($space->getPlans() as $plan) : ?>
							<div class="plan_ttl_box cf">
								<h3><?php echo e($plan->name); ?>　<span><i class="fa fa-flash fa-lg"></i> 今すぐ予約</span></h3>
							
								<div class="button-box_wrap cf">
									<div class="plan-button-box">
										<?php if ($plan->by_hour) : ?>
											<a href="" class="button-blue"><?php echo $plan->getChargePerHour(); ?></a>
										<?php endif; ?>
										<?php if ($plan->by_day) : ?>
											<a href="" class="button-blue"><?php echo $plan->getChargePerDay(); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="plan_txt"><?php echo e($plan->explanation); ?></div>
						<?php endforeach; ?>
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
					<div class="star_box"><img src="<?php echo url('assets/mypage/img/stars2.png'); ?>" alt="写真"> 4.4 <span class="small_txt blue">166件</span></div>
					<div class="review_wrap">
						<div class="review_line cf">
							<div class="review_img_box"> <img src="<?php echo url('assets/mypage/img/cust.png'); ?>" alt="写真"> </div>
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
							<div class="review_img_box"> <img src="<?php echo url('assets/mypage/img/cust.png'); ?>" alt="写真"> </div>
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
							<div class="review_img_box"> <img src="<?php echo url('assets/mypage/img/cust.png'); ?>" alt="写真"> </div>
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
						<div class="main__host-logo"> <img src="<?php echo url('assets/mypage/img/logppink.png'); ?>" alt="写真"> <span class="small_txt day">登録日 2017／４／８</span> </div>
						<!-- /main__host-logo　-->
						<div class="main__host-detail">
							<h2 class="host_name"><?php echo e($space->host->getName()); ?></h2>
					<div class="col3">
						<ul>
							<li>予約のしやすさ</li>
							<li><span class="star three"></span></li>
							<li>しやすい</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答率</li>
							<li><span class="star five"></span></li>
							<li>98.8％</li>
						</ul>
					</div>
					<!-- /col3　-->
					<div class="col3">
						<ul>
							<li>返答時間</li>
							<li><span class="star four"></span></li>
							<li>数時間以内</li>
						</ul>
					</div>

						</div>
						<!-- /main__host-detail　-->
					</div>
					<!-- /host-detail_wrap　-->説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい説明せつめい <a class="blue_txt" href="">もっと詳しく</a>
					<div class="authentication cf">
						<div class="logo"> <img src="<?php echo url('assets/mypage/img/logogreen.png'); ?>" alt="写真"> </div>
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
		<div id="map" style="height: 400px;"></div>
		<input type="hidden" id="latitude" value="<?php echo e($space->institution->latitude); ?>">
		<input type="hidden" id="longitude" value="<?php echo e($space->institution->longitude); ?>">
		
		<!-- map  -->
		<!-- 所在地  -->
		<div class="map_adress cf">
			<div class="main_wrapper cf">
				<div class="adress_wrap">
					<div class="adress_box cf">
						<h3 class="access-title">住所</h3>
						<p class="access-content"><?php echo e($space->institution->getAddress()); ?></p>
					</div>
					<!-- /adress_box　-->
					<div class="adress_box cf">
						<h3 class="access-title">アクセス</h3>
						<p class="access-content"><?php echo nl2br(e($space->institution->access)); ?></p>
					</div>
				</div>
				<!-- /adress_wrap　-->
				<div class="gm_btn"> <a target="_blank" href="https://www.google.co.jp/maps/?q=<?php echo e($space->institution->latitude); ?>,<?php echo e($space->institution->longitude); ?>">Google Mapで見る</a> </div>
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
							<img src="<?php echo url('assets/mypage/img/samplepic_slid0.png'); ?>" alt="写真"> <img class="icon_h" src="<?php echo url('assets/mypage/img/hert.png'); ?>" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="<?php echo url('assets/mypage/img/man.png'); ?>" alt="写真">～16人 ○○都〇〇区　<img src="<?php echo url('assets/mypage/img/star.jpg'); ?>" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="<?php echo url('assets/mypage/img/samplepic_slid0.png'); ?>" alt="写真"> <img class="icon_h" src="<?php echo url('assets/mypage/img/hert.png'); ?>" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="<?php echo url('assets/mypage/img/man.png'); ?>" alt="写真">～16人 ○○都〇〇区　<img src="<?php echo url('assets/mypage/img/star.jpg'); ?>" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<img src="<?php echo url('assets/mypage/img/samplepic_slid0.png'); ?>" alt="写真"> <img class="icon_h" src="<?php echo url('assets/mypage/img/hert.png'); ?>" alt="写真">
							<div class="price_box"> \100～1,500円<span class="small_time">/時間</span> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
							<p><img src="<?php echo url('assets/mypage/img/man.png'); ?>" alt="写真">～16人 ○○都〇〇区　<img src="<?php echo url('assets/mypage/img/star.jpg'); ?>" alt="写真">　000件</p>
							<p>○○■■駅より徒歩〇分</p>
						</div>
					</div>
					<!-- /box_wrap　-->
					<div class="pre"><img src="<?php echo url('assets/mypage/img/arrow01.png'); ?>" alt="写真"></div>
					<div class="next"><img src="<?php echo url('assets/mypage/img/arrow02.png'); ?>" alt="写真"></div>
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
				console.log(scrollAmount+":"+foot);
					if(scrollAmount > position && scrollAmount<(foot-h)){
					menu.css({'position':'fixed','top':"0px"})
					}else{
					menu.css({'position':'absolute','top':'0px'});				
					}
			});
	}

	$('#angle-right,#w_close').on('click',function () {
		$("div#floating-menu").slideToggle("fast");
	});

});
});


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq2kSVHGO-_H7Ls1bm7rduFQ4V5Xw9TE"></script>
<script>
$(function() {
	var map;
	var maker;
	
	function initMap() {
		
		var lat = $('#latitude').val();
		var lng = $('#longitude').val();
		var latlng = new google.maps.LatLng(lat, lng);
		
		map = new google.maps.Map(document.getElementById('map'), {
			center: latlng,
			zoom: 14
		});
		
		marker = new google.maps.Marker({
			map: map,
			position: latlng
		});
	}
	initMap();


});
</script>

@stop
