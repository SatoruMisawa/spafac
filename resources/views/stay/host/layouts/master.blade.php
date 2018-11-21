<!-- @extends 
@include
@section('content')
@endsection
url: href="{{ route('host.facility.space.new') }}"
css等 : href="{{ asset('assets/css/blog_page.css') }}" -->

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="qLknLiMEtrnIojbIgWQg6U2SYYcHEtgF9RFaw36b">
	<title>スペースオーナー | スペースファクトリー</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="/bower_components/admin-lte/plugins/iCheck/all.css">
	<link rel="stylesheet" href="/bower_components/admin-lte/dist/css/AdminLTE.min.css">
	<!-- <link rel="stylesheet" href="https://test.spafac.com/bower_components/admin-lte/dist/css/skins/skin-green.min.css"> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link href="{{ asset('assets/css/common.css') }}" >
	<link href="{{ asset('assets/css/css/style.css') }}" >
	<link rel="stylesheet" href="{{ asset('assets/css/css/media.css') }}">
	<style></style>
	<meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;Bootstrap&quot;:-1,&quot;jQuery&quot;:&quot;3.3.1&quot;,&quot;jQuery UI&quot;:&quot;1.11.4&quot;,&quot;SPDY&quot;:-1,&quot;Font Awesome&quot;:-1}">
	<script type="text/javascript" src="chrome-extension://fhhdlnnepfjhlhilgmeepgkhjmhhhjkh/js/detector.js"></script>
</head>

<body class="sidebar-mini skin-black-light" style="height: auto; min-height: 100%;">
	<div class="wrapper" style="height: auto; min-height: 100%;">
	@include('stay.host.layouts.header')
	@include('stay.host.layouts.sidebar')
	@yield('content')
	@include('stay.host.layouts.footer')
</div>
</body>
</html>