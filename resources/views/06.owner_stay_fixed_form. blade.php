@extends('stay.host.layouts.master')
<!-- Main Header -->

<!-- <header class="main-header">
			<div class="inner_admin">
				<div id="nav-drawer" class="pc_hide">
					<input id="nav-input" type="checkbox" class="nav-unshown">
					<label class="menu-trigger" for="nav-input">
						<span></span>
						<span></span>
						<span></span>
					</label>
					<label class="nav-unshown" id="nav-close" for="nav-input"></label>
					<div id="nav-content">
						<ul>
							<li><a href="#">ダッシュボード</a></li>
							<li><a href="#">スペース管理</a></li>
							<li><a href="#">予約管理</a></li>
							<li><a href="#">メッセージBOX</a></li>
							<li><a href="#">売上管理</a></li>
							<li><a href="#">設定</a></li>
							<li><a href="https://test.spafac.com/help">ヘルプ</a></li>
							<li><a href="https://test.spafac.com/inquiry">お問い合わせ</a></li>
							<li class="list-your-thing pull-left"><a class="btn btn-host" href="#">スペースを登録</a></li>
						</ul>
					</div>
				</div>
				<div class="head_l_admin cf">
					@include('stay.host.layouts.header')
				</div>
			</div>
		</header> -->

<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper" style="min-height: 622px;">
		<section class="content container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="/host/facilities" accept-charset="UTF-8" class="h-adr"></form>
						<input name="_token" type="hidden" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" name="_token" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" class="p-country-name" value="Japan">
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">定型文</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">予約確定時</div></div>
									<p class="help-block">予約の確定（支払完了）時に設定した内容のメッセージが自動でゲストに送られます。</p>
									<textarea class="form-control" rows="3" placeholder="予約確定時"></textarea>
									<p class="help-block">例）鍵の受け渡しは当日受付にて行います。プロジェクター、Wi-Fi、ホワイトボードなど一式無料でご利用できますのでご安心ください。</p>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">予約否認時</div></div>
									<p class="help-block">予約の否認時に設定した内容のメッセージが自動でゲストに送られます。</p>
									<textarea class="form-control" rows="3" placeholder="予約否認時"></textarea>
									<p class="help-block">例）大変申し訳ありません。本日程ですが、ビルの緊急メンテナンス日となってしまいました。またご予約いただけますことを心よりお待ちしております。</p>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">利用日前日のリマインド</div></div>
									<p class="help-block">利用日の前日に設定したメッセージが自動でゲストに送られます。</p>
									<textarea class="form-control" rows="3" placeholder="利用日前日のリマインド"></textarea>
									<p class="help-block">明日の利用時の案内を再度送ります。鍵の開け方、キッチンの利用方法、ゴミの片付け方をご確認ください。</p>
							</div>
						</div><!--box-body pad　END-->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">
								<font style="vertical-align: inherit;">
									<font class="preservation-button" style="vertical-align: inherit;">保存</font>
								</font>
							</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</section>
	</div>

<!-- Main Footer -->
@endsection