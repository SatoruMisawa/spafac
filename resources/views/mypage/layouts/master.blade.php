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
		<link rel="stylesheet" href="<?php echo url('css/media.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/top.css'); ?>">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<!--css end-->
	</head>
	<body>
		@include('mypage.layouts.header')
		@include('mypage.layouts.campaign')
		@include('layouts.message')
		@yield('content')
		@include('mypage.layouts.footer')
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
			
			$('#humbt,.close span').on('click',function () {
				alert("jji");
			$("#mypage_header_menu").slideToggle("fast");
			
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
	</body>
</html>