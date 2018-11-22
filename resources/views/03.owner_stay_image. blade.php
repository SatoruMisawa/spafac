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
					<form method="POST" action="host/facilities" accept-charset="UTF-8" class="h-adr"></form>
						<input name="_token" type="hidden" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" name="_token" value="nJaPejfPXkdepu0EGb0HsAiDyaH85zX05RR2T1oX">
						<input type="hidden" class="p-country-name" value="Japan">
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">スペース写真</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="card row-space-4">
							<div class="card-header"><div class="SDR4G06kguti"><div class="FBtyNIKsrTb">必須</div><div class="BMWerCSq5F">写真</div></div></div>
							<div class="card-body">
								<div class="row row-condensed row-space-4">
									<label class="text-right col-3">新しいスペース画像を登録</label>
									<div class="col-8">
										<input class="row-space-top-1-file" type="file" name="profile_image[image]" id="profile_image_image"><br>
										<p class="help-block">登録しているスペースの外観や内装、設備等の画像を最低1枚追加してください。推奨サイズは1260x840です。</p>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="submit" name="commit" value="保存する" class="btn btn btn-primary btn-large row-space-4" data-disable-with="処理中...">
						</div>
					</div>
					</form>
				</div>
			</div>
		</section>
	</div>

<!-- Main Footer -->
@endsection