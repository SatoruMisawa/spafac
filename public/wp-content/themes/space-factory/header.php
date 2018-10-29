<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Space_Factory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'space-factory' ); ?></a>

	<header id="masthead">
		
		<div class="site-header">
		
		<?php if ( is_front_page() && is_home() ) { ?>
			<h1 class="site-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		<?php } else { ?>
			<h2 class="site-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h2>
		<?php } ?>
		
		<nav class="site-header__nav">
			<input id="check" class="site-header__nav--input" type="checkbox">
            <label class="site-header__nav--open" for="check"><span></span><span></span><span></span></label>
			<ul class="site-header__nav--content">
				<li class="link-guide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>guide">ご利用ガイド</a></li>
				<li class="link-help"><a href="#">ヘルプ</a></li>
				<li class="link-inquiry"><a href="<?php echo esc_url( home_url( '/' ) ); ?>inquiry">お問い合わせ</a></li>
				<li class="link-havespace"><a href="#">スペースをお持ちの方</a></li>
				<li class="link-login"><a href="#">ログイン</a></li>
			</ul>
		</nav>
		
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
