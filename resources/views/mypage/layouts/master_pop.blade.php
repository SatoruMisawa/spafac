<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
	<head>
		<title> </title>
		<meta name="description" content="">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,user-scalable=1">
		<meta name="csrf-token" content="<?php echo csrf_token(); ?>">
		<!--OP-->
		<meta property="og:image" content="">
		<meta property="og:url" content="">
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:type" content="website">
		<meta property="og:description" content="">
		<!--css-->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/import.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/dashboadTop_tyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/dashboard_header_style.css'); ?>">
		<link rel="stylesheet" href="<?php echo url('css/media.css'); ?>">
		<!--css end-->

	</head>
	<body>
		<div class="wrap">
		@include('mypage.layouts.header-menu')
		<div id="dashboardTop">
		<div id="header02">
			<div class="inner">
				<ul>
					<!--<li><a href="<?php //echo url('mypage'); ?>">マイページ </a></li>
					<li><a href="<?php //echo url('host'); ?>">スペースオーナー</a></li>
					<li><a href="<?php //echo url('mypage/like'); ?>">お気に入り</a></li>
					<li><a href="<?php //echo url('mypage/management'); ?>">予約管理</a></li>
					<li><a href="<?php //echo url('mypage/mail-list'); ?>">メール受信一覧</a></li>
					<li><a href="<?php //echo url('mypage/review'); ?>">レビュー</a></li>
					<li><a href="<?php //echo url('mypage/profile/edit-account'); ?>">会員情報修正</a></li>
					<li><a href="<?php // echo url('logout'); ?>" onClick="window.open('about:blank','_self').close();">ウィンドウを閉じる</a></li>-->


					<li><a href="<?php echo url('mypage'); ?>">ダッシュボード</a></li>
					<li><a href="<?php echo url('mypage/mail-list'); ?>">メッセージ</a></li>
					<li><a href="#">スペース</a></li>
					<li><a href="#">参加する</a></li>
					<li><a href="<?php echo url('mypage/profile/edit-account'); ?>">プロフフィール</a></li>
					<li><a href="#">アカウント</a></li>
				</ul>
			</div>
		</div>

		@yield('content')
        <footer>&nbsp;</footer>
		<script src="<?php echo url('bower_components/jquery/dist/jquery.min.js'); ?>"></script>
		<script src="<?php echo url('bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
		<script src="<?php echo url('assets/common/js/common.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo url('assets/mypage/js/lib/clipboard.min.js'); ?>"></script><script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo url('assets/mypage/js/script.min.js'); ?>"></script>
		<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
		<script src="<?php echo url('js/media.js') ?>"></script>
		<script>
			$("#overlay-button").on("click", function() {
			$("header").toggleClass("mobile");
			});
			$('#humbt,.nav_menu>.close span').on('click',function () {
			$("#mypage_header_menu").slideToggle("fast");
			});
			$('.search-icon,#m_search>.close span').on('click',function () {
			$("#m_search").slideToggle("fast");
			});
			$('.sidebar-icon,.sidebar>.close span').on('click',function () {
			$(".left_contents").slideToggle("fast");
			});

			$(document).ready(function(){
			  $('#slider').slick({
			  "arrows": false,
			  "accessibility": true,
			  "fade": true,
			  "centerMode": true
			  });
			});
		</script>
		@yield('script')
        @include('to-top')
			</div>
		</div>
	</body>
</html>
