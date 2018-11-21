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
							<h1 class="box-title">オプションの編集</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">オプションの名称</div></div>
									<p class="help-block">例）パーティーグッズ一式</p>
								<div class="row">
									<div class="col-sm-6">
										<input class="form-control" maxlength="100" placeholder="オプションの名称" name="optionname" type="text">
									</div>
								</div>
							</div>
							<div class="form-group ">
									<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">オプションの説明</div></div>
										<p class="help-block">例）衣装一式（ドレス・仮装衣装・小道具などを揃えています。）</p>
										<textarea class="form-control" rows="3" placeholder="オプションの説明"></textarea>
								</div>
							<!--content start-->
							<div class="form-group ">
								<div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">価格と単位</div></div>
								<div class="row">
									<div class="col-sm-9">
										<span class="FormItem__Unit-oe304i-5 hguKws">¥</span>
										<input class="form-control p-locality" maxlength="10" placeholder="10000" name="money" type="text">
										<span class="FormItem__Unit-oe304i-5 hguKws">／</span>
										<input class="form-control p-locality" maxlength="10" placeholder="回" name="money" type="text">
									</div>
								</div>
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