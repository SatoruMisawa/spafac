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
		<!--css end-->

	</head>
	<body>
<?php echo $__env->make('mypage.layouts.header-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
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
		<?php echo $__env->yieldContent('script'); ?>
        <?php echo $__env->make('to-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>