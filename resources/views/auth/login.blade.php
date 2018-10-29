@extends('mypage.layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/top.css">
<style>
.login_form input[type=text],
.login_form input[type=password]{
	width:100% !important;
	border:1px solid #666 !important;
	background-color:#FFF !important;
	border-radius:7px;
	padding:5px 1em;
	box-shadow:none !important;	
}
</style>
<div class="login" id="mypage_contents">
	<h2 class="login_title_h2">ログイン</h2>
	@include('mypage.layouts.message', array('errors' => $errors))
	<div class="login_box box">
		<div class="sns_login">
			<h3>外部サービスでログイン</h3>
			<p>ログイン画面にサイト準備中につき、メールアドレスでの登録が可能です。</p>
			<ul>
				<li class="fb"><a href=""><img src="<?php echo url('assets/mypage/img/fb2.png'); ?>" alt=""><span>Facebookでログイン</span></a></li>
				<li class="ya"><a href=""><img src="<?php echo url('assets/mypage/img/ya.png'); ?>" alt=""><span>Yahoo!でログイン</span></a></li>
				<li class="gg"><a href=""><img src="<?php echo url('assets/mypage/img/gg.png'); ?>" alt=""><span>Googleでログイン</span></a></li>
			</ul>
			<p>ログイン以外の目的に使われることはありません。スペースファクトリーがゲストの同意なしに投稿することはありません。</p>
		</div>
		<div class="mail_login">
			<h3>メールアドレスでログイン</h3>
			<div class="login_form">
				<?php echo Form::open(array('route' => 'login')); ?>
					<div>
						<span class="text">メールアドレス</span>
                        	<?php echo Form::text('email', null, ['maxlength' => '100']); ?>
						<span class="text">パスワード</span>
                       		<?php echo Form::password('password', ['maxlength' => '20']); ?>
					</div>
					<div class="check">
						<label>
						<input type="checkbox">ログインしたままにする。
						</label>
					</div>
					<button type="submit">ログイン</button>
				<?php echo Form::close(); ?>
			</div>
		</div>
	</div>
	<div class="register_link">
		<p>まだアカウントをお持ちではない方は<a href="<?php echo url('registration'); ?>">こちら</a>&gt;</p>
	</div>
</div>
@stop


