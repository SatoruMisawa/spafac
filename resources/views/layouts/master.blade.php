<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>スペースファクトリー</title>
<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/import.css'); ?>">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo url('assets/css/search.css'); ?>">
<script src="<?php echo url('assets/common/js/common.js'); ?>"></script>
</head>

<body class="home page-template-default page page-id-5 logged-in">
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content">Skip to content</a>-->
	@include('layouts.header')
	@include('layouts.message')
	@yield('content')
	@include('layouts.footer')
</div><!-- #page -->

<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/space-factory-kinofumi.c9users.io\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"\u3042\u306a\u305f\u304c\u30ed\u30dc\u30c3\u30c8\u3067\u306f\u306a\u3044\u3053\u3068\u3092\u8a3c\u660e\u3057\u3066\u304f\u3060\u3055\u3044\u3002"}}};
/* ]]> */
</script>
{{-- <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1'></script>
<script type='text/javascript' src='/wp-content/themes/space-factory/js/navigation.js?ver=20151215'></script>
<script type='text/javascript' src='/wp-content/themes/space-factory/js/skip-link-focus-fix.js?ver=20151215'></script>
<script type='text/javascript' src='/wp-content/themes/space-factory/js/select.js?ver=20180213'></script>
<script type='text/javascript' src='/wp-content/themes/space-factory/js/ofi.min.js?ver=20180215'></script>
<script type='text/javascript' src='/wp-content/themes/space-factory/js/default.js?ver=20180215'></script>
<script type='text/javascript' src='/wp-includes/js/wp-embed.min.js?ver=4.9.5'></script>
<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@yield('script')
@include('to-top')
</body>
</html>
