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
							<h1 class="box-title">キャンセルポリシー・利用規約</h1>
							<p class="help-block">1文字でも記載があるとスペースマーケットのキャンセルポリシーや利用規約は適用されません。ご注意ください。</p>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">キャンセルポリシー</div></div>
									<p class="help-block">未入力の場合は、スペースファクトリーの<a href="#" target="_blank">キャンセルポリシー</a>に準ずる旨を表示します。</p>
									<textarea class="form-control" rows="3" placeholder="キャンセルポリシー"></textarea>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb bg-blue">任意</div><div class="BMWerCSq5F">利用規約</div></div>
									<p class="help-block">未入力の場合は、スペースファクトリーの<a href="#" target="_blank">ゲスト規約</a>に準ずる旨を表示します。</p>
									<textarea class="form-control" rows="3" placeholder="予約否認時"></textarea>
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