@extends('host.layouts.master')

@section('content')
<aside class="admin_main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu_admin tree" data-widget="tree">
			<li class="admin_header">スペース管理</li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/spaces"><span>スペース一覧</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/facilities/new"><span>新規スペースの作成</span></a></li>
			<li class="admin_header">スペースオーナー情報</li>
			<li class="admin_sidebarlist"><a class="color2WGB6GHYU" href="https://test.spafac.com/host/account/edit-basic"><span>施設情報</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-basic"><span>基本情報</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-basic"><span>写真</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-basic"><span>プラン・価格設定</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-basic"><span>スペースの紹介・注意事項</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-basic"><span>オプション</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-address"><span>定型文</span></a></li>
			<li class="admin_sidebarlist"><a href="https://test.spafac.com/host/account/edit-bank"><span>キャンセルポリシー・利用規約</span></a></li>
			<li class="admin_header"></li>
			<li class="admin_sidebarlist"><a href="javascript:void(0)" onclick="opener.location.href='/';window.open('about:blank','_self').close();"><span>サイトトップに戻る</span></a></li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside> <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 622px;">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div>
					{{
					Form::open([
					'route' => 'host.facility.create',
					'method' => 'POST',
					'class' => 'h-adr',
					])
					}}
					@csrf
					<input type="hidden" class="p-country-name" value="Japan">
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">施設情報</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">施設の名称</div>
								</div>
								@include('layouts.error', ['name' => 'name'])
								<div class="row">
									<div class="col-sm-6">
										{{
										Form::text(
										'name',
										null,
										[
										'class' => 'form-control',
										'maxlength' => '100',
										'placeholder' => '例）大阪梅田徒歩5分のレトロな古民家'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">郵便番号</div>
								</div>
								<p class="help-block">ハイフンなしの半角数字。入力すると住所が自動補完されます。</p>
								@include('layouts.error', ['name' => 'zip'])
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										{{
										Form::text(
										'zip',
										null,
										[
										'id' => 'zip-input',
										'class' => 'form-control p-postal-code',
										'maxlength' => '7',
										'placeholder' => '例）5300001'
										]
										)
										}}
										{{-- <input type="hidden" id="address" class="p-region p-locality p-street-address p-extended-address"> --}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">都道府県</div>
								</div>
								@include('layouts.error', ['name' => 'prefecture_id'])
								<div class="row">
									<div class="col-sm-6">
										{{
										Form::select(
										'prefecture_id',
										['' => '選択してください'] + $prefectures,
										null,
										['class' => 'form-control p-region-id']
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">市区町村</div>
								</div>
								<p class="help-block">漢字</p>
								@include('layouts.error', ['name' => 'address1'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text(
										'address1',
										null,
										[
										'class' => 'form-control p-locality',
										'maxlength' => '100',
										'placeholder' =>'例）大阪市北区'
										]
										)
										}}
									</div>
								</div>

								<p class="help-block">フリガナ</p>
								@include('layouts.error', ['name' => 'address1_ruby'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text(
										'address1_ruby',
										null,
										[
										'class' => 'form-control',
										'maxlength' => '100',
										'placeholder' => '例）オオサカシキタク'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">町名・番地</div>
								</div>
								<p class="help-block">漢字</p>
								@include('layouts.error', ['name' => 'address2'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text('address2',
										null,
										[
										'class' => 'form-control p-street-address',
										'maxlength' => '100',
										'placeholder' => '例）梅田0丁目0-0'
										]
										)
										}}
									</div>
								</div>

								<p class="help-block">フリガナ</p>
								@include('layouts.error', ['name' => 'address2_ruby'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text(
										'address2_ruby',
										null,
										[
										'class' => 'form-control',
										'maxlength' => '100',
										'placeholder' => '例）ウメダ0チョウメ0-0'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb bg-blue">任意</div>
									<div class="BMWerCSq5F">ビル名・部屋番号</div>
								</div>
								<p class="help-block">漢字</p>
								@include('layouts.error', ['name' => 'address3'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text(
										'address3',
										null,
										[
										'class' => 'form-control p-extended-address',
										'maxlength' => '100',
										'placeholder' => '例）梅田古民家ビル'
										]
										)
										}}
									</div>
								</div>

								<p class="help-block">フリガナ</p>
								@include('layouts.error', ['name' => 'address3_ruby'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::text(
										'address3_ruby',
										null,
										[
										'class' => 'form-control',
										'maxlength' => '100',
										'placeholder' => '例）ウメダコミンカビル'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">地図の設定</div>
									@include('layouts.error', ['name' => 'latitude'])
									@include('layouts.error', ['name' => 'longitude'])
								</div>
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::hidden(
										'latitude',
										null,
										[
										'id' => 'latitude',
										'class' => 'form-control'
										]
										)
										}}
										{{
										Form::hidden(
										'longitude',
										null,
										[
										'id' => 'longitude',
										'class' => 'form-control'
										]
										)
										}}
										<div id="map" style="height: 400px; position: relative; overflow: hidden;"></div>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">アクセス</div>
								</div>
								<p class="help-block">最寄り駅からの歩き方や所要時間、高速道路の出口などを入力してください。</p>
								@include('layouts.error', ['name' => 'access'])
								<div class="row">
									<div class="col-sm-9">
										{{
										Form::textarea(
										'access',
										null,
										[
										'class' => 'form-control',
										'rows' => '4',
										'placeholder' => '例）JR梅田より徒歩7分'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">電話番号</div>
								</div>
								<p class="help-block">この情報は予約が確定次第ゲストに送信される利用日程表で開示されます。</p>
								@include('layouts.error', ['name' => 'tel'])
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										{{
										Form::text(
										'tel',
										null,
										[
										'class' => 'form-control',
										'maxlength' => '20',
										'placeholder' => '例）09012345678'
										]
										)
										}}
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">施設の種類</div>
								</div>
								@include('layouts.error', ['name' => 'facility_kind_id'])
								<div class="row radio">
									@foreach ($facilityKinds as $facilityKind)
									<div class="col-md-3 col-xs-6">
										<label>
											{{
											Form::radio(
											'facility_kind_id',
											$facilityKind->id,
											true)
											}}
											{{ $facilityKind->name }}
										</label>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
						<button type="submit" class="btn btn-success pull-right">保存して進む</button>
					</div>
					{{ Form::close() }}
				</div>
			</div>
			</form>
		</div>
	</section>
</div>
@endsection

@section('script')
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq2kSVHGO-_H7Ls1bm7rduFQ4V5Xw9TE"></script>

<script>
	$(function () {
		var map;
		var maker;

		$('#zip-input').change(function () {
			var address = $(this).val()

			var geocoder = new google.maps.Geocoder()
			geocoder.geocode({
				address: address
			}, function (results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[0].geometry.location)
					marker.setPosition(results[0].geometry.location)
				}
			})
		})

		function initMap() {

			var lat = $('#latitude').val()
			var lng = $('#longitude').val()
			if (!lat) {
				lat = 34.702715 //35.681429
				$('#latitude').val(lat)
			}
			if (!lng) {
				lng = 135.495908 //139.767095
				$('#longitude').val(lng)
			}
			var latlng = new google.maps.LatLng(lat, lng)

			map = new google.maps.Map(document.getElementById('map'), {
				center: latlng,
				zoom: 14
			})

			marker = new google.maps.Marker({
				map: map,
				position: latlng,
				draggable: true
			})

			google.maps.event.addListener(marker, 'dragend', function (ev) {

				$('#latitude').val(ev.latLng.lat())
				$('#longitude').val(ev.latLng.lng())

			})

		}
		initMap()
	})
</script>
@endsection