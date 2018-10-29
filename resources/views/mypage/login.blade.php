@extends('mypage.layouts.master')

@section('content')
<div class="login" id="mypage_contents">
	<h2 class="login_title_h2">ログイン</h2>
	@include('mypage.layouts.message', array('errors' => $errors))
	<div class="login_box box">
		<div class="sns_login">
			<h3>外部サービスでログイン</h3>
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
				<form>
					<div><span class="text">メールアドレス</span>
						<input type="mail"><span class="text">パスワード</span>
						<input type="password">
					</div>
					<div class="check">
						<label>
						<input type="checkbox">ログインしたままにする。
						</label>
					</div>
					<button type="submit">ログイン</button>
				</form>
			</div>
		</div>
	</div>
	<div class="register_link">
		<p>まだアカウントをお持ちではない方は<a href="<?php echo url('registration'); ?>">こちら</a>&gt;</p>
	</div>
</div>
@stop
