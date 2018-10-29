@extends('mypage.layouts.master_pop')

@section('content')
@include('mypage.layouts.header-menu')
<div class="pass_setting" id="mypage_contents">
	<h2>パスワードの再設定</h2>
	<div class="bar">
		<ul>
			<li><img src="<?php echo url('assets/mypage/img/pass.png'); ?>" alt=""><span>メールアドレスの確認</span></li>
			<li><img src="<?php echo url('assets/mypage/img/pass2.png'); ?>" alt=""><span>パスワード再設定完了</span></li>
			<li><img src="<?php echo url('assets/mypage/img/pass2.png'); ?>" alt=""><span>パスワードの再設定</span></li>
		</ul>
	</div>
	<div class="mail_send_box box">
		<p>登録に利用したメールアドレスを入力して下さい。<br>パスワードを再設定するためのメールを送りします。</p>
		<div class="send_box">
			<form><span>メールアドレス</span>
				<input type="mail">
				<button type="submit">メールを送信する</button>
			</form>
		</div>
	</div>
</div>
@stop
