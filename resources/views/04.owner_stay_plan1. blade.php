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
							<h1 class="box-title">プラン一覧</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad_mini1">
							<div class="col-md-9">
								<div class="card">
									<div class="card-header">
										<ul class="">
											<li><a class="btn btn-host" href="/">スペースを追加</a></li>
										</ul>
									</div>
									<div class="suspension-container">
										<ul class="list-unstyled list-layout">
											<li class="listing card-body">
												<div class="row row-table">
													<div class="col-xs-4 col-lg-2">
														<div class="media-photo media-photo-block">
															<div class="media-cover text-center">
																<img class="img-responsive-height" src="">
															</div>
														</div>
													</div>
													<div class="col-xs-8 col-lg-6">
															<span class="sp_plan_2smgutu"><a class="text-normal trans" href="/">プラン名</a></span>
															<div class="actions row-space-top-1"><span class="sp_plan_2smdfutusa"></span></div>
															<div class="actions row-space-top-1"><span class="sp_plan_2smdfutu"><a class="sp_plan_editingtxst"href="/">このプランを編集する</a></span></div>
														</div>
													<div class="col-md-12 col-lg-4">
														<div class="pull-right pull-change">
															<div class="listing-criteria-header activation-notification">
																<div class="listing-criteria-header-message">
																	<a class="btn" href="/listings/19/edit">非公開中</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="listing card-body">
													<div class="row row-table">
														<div class="col-xs-4 col-lg-2">
															<div class="media-photo media-photo-block">
																<div class="media-cover text-center">
																	<img class="img-responsive-height" src="../../images/something.jpg">
																</div>
															</div>
														</div>
														<div class="col-xs-8 col-lg-6">
															<span class="sp_plan_2smgutu"><a class="text-normal trans" href="/">プラン名</a></span>
															<div class="actions row-space-top-1"><span class="sp_plan_2smdfutusa">価格　¥900/時間　¥4500/日</span></div>
															<div class="actions row-space-top-1"><span class="sp_plan_2smdfutu"><a class="sp_plan_editingtxst"href="/">このプランを編集する</a></span></div>
														</div>
														<div class="col-md-12 col-lg-4">
															<div class="pull-right pull-change">
																<div class="listing-criteria-header activation-notification">
																	<div class="listing-criteria-header-message">
																		<a class="btn btn-primary" href="/listings/1/edit">公開中</a></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
											</li>	
										</ul>
									</div>
								</div>
							</div>
						</div><!--box-body pad　END-->
					</div>
					</form>
				</div>
			</div>
		</section>
	</div>

<!-- Main Footer -->
@endsection