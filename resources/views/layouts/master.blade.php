<!DOCTYPE html>
<html>
	<head>
		<!-- IE8+に対して「IE=edge」と指定することで、利用できる最も互換性の高い最新のエンジンを使用するよう指示できます
			参考: https://www.modern.ie/en-us/performance/how-to-use-x-ua-compatible -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- ページのタイトルを記述 -->
		<title></title>
		<!-- パフォーマンスのために使用する文字のエンコーディングを記述
			参考: https://developers.google.com/speed/docs/best-practices/rendering#SpecifyCharsetEarly -->
		<meta charset="utf-8">
		<!-- content属性にページの紹介文を記述 -->
		<meta name="description" content="">
		<!-- content属性にページの著者情報を記述 -->
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/import.css'); ?>">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		@yield('css')
		</head>
	<body>
		@include('layouts.header')
		@yield('content')
		@include('mypage.layouts.footer')
		@yield('script')
		<script src="<?php echo url('assets/common/js/common.js'); ?>"></script>
		<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
        @include('to-top')

	</body>
</html>
