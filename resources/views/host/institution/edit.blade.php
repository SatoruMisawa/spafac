@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		新規スペース
		<small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('host') }}"><i class="fa fa-dashboard"></i> ホーム</a></li>
	</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
	@include('host.layouts.message', array('errors' => $errors))
	<div class="row">
		<div class="col-md-12">
			<form action="/host/space" method="POST">
				@csrf
				<input type="hidden" class="p-country-name" value="Japan">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">施設情報</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['name']) }}">
								<label><small class="label bg-red">必須</small> 施設名</label>
								{{ App\Helper::error($errors, ['name']) }}
								<div class="row">
									<div class="col-sm-6">
										{{ Form::text('name', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）大阪梅田 徒歩5分のレトロな古民家']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['zip']) }}">
								<label><small class="label bg-red">必須</small> 郵便番号</label>
								<p class="help-block">ハイフンなしの半角数字。入力すると住所が自動補完されます。</p>
								{{ App\Helper::error($errors, ['zip']) }}
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										{{ Form::text('zip', null, ['class' => 'form-control p-postal-code', 'maxlength' => '7', 'placeholder' => '例）5300001']) }}
										<input type="hidden" id="address" class="p-region p-locality p-street-address p-extended-address">
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['prefecture_id']) }}">
								<label><small class="label bg-red">必須</small> 都道府県</label>
								{{ App\Helper::error($errors, ['prefecture_id']) }}
								<div class="row">
									<div class="col-sm-6">
										{{-- {{ Form::select('prefecture_id', ['' => '選択してください'] + $prefectureList, null, ['class' => 'form-control p-region-id']) }} --}}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['address1', 'address1_ruby']) }}">
								<label><small class="label bg-red">必須</small> 市区町村</label>
								{{ App\Helper::error($errors, ['address1', 'address1_ruby']) }}
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address1', null, ['class' => 'form-control p-locality', 'maxlength' => '100', 'placeholder' => '例）大阪市北区']) }}
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address1_ruby', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）オオサカシキタク']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['address2', 'address2_ruby']) }}">
								<label><small class="label bg-red">必須</small> 町名・番地</label>
								{{ App\Helper::error($errors, ['address2', 'address2_ruby']) }}
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address2', null, ['class' => 'form-control p-street-address', 'maxlength' => '100', 'placeholder' => '例）梅田0丁目0-0']) }}
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address2_ruby', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ウメダ0チョウメ0-0']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['address3', 'address3_ruby']) }}">
								<label><small class="label bg-blue">任意</small> ビル名・部屋番号</label>
								{{ App\Helper::error($errors, ['address3', 'address3_ruby']) }}
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address3', null, ['class' => 'form-control p-extended-address', 'maxlength' => '100', 'placeholder' => '例）梅田古民家ビル']) }}
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										{{ Form::text('address3_ruby', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ウメダコミンカビル']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['latitude']) }}">
								<label><small class="label bg-red">必須</small> 地図の設定</label>
								{{ App\Helper::error($errors, ['latitude']) }}
								<div class="row">
									<div class="col-sm-9">
										<div id="map" style="height: 400px;"></div>
										{{ Form::hidden('latitude', null, ['id' => 'latitude', 'class' => 'form-control']) }}
										{{ Form::hidden('longitude', null, ['id' => 'longitude', 'class' => 'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['access']) }}">
								<label><small class="label bg-red">必須</small> アクセス</label>
								<p class="help-block">最寄り駅からの歩き方や所要時間、高速道路の出口などを入力してください。</p>
								{{ App\Helper::error($errors, ['access']) }}
								<div class="row">
									<div class="col-sm-9">
										{{ Form::textarea('access', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => '例）JR梅田より徒歩7分']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['tel']) }}">
								<label><small class="label bg-red">必須</small> 電話番号</label>
								<p class="help-block">この情報は予約が確定次第ゲストに送信される利用日程表で開示されます。</p>
								{{ App\Helper::error($errors, ['tel']) }}
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										{{ Form::text('tel', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）09012345678']) }}
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['institution_kind_id']) }}">
								<label><small class="label bg-red">必須</small> 施設の種類</label>
								{{ App\Helper::error($errors, ['institution_kind_id']) }}
								<div class="row radio">
									{{-- @foreach ($institutionKinds as $institutionKind)
										<div class="col-md-3 col-xs-6"><label>{{ Form::radio('institution_kind_id', $institutionKind->id, true, []) }} {{ e($institutionKind->name) }}</label></div>
									@endforeach --}}
								</div>
							</div>
						</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
						<button type="submit" class="btn btn-success pull-right">保存して進む</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /.content -->
@stop

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq2kSVHGO-_H7Ls1bm7rduFQ4V5Xw9TE"></script>

<script>
$(function() {
	var map;
	var maker;
	
	$('.p-postal-code').on('change', function() {
		
		var address = $('#address').val();
		
		var geocoder = new google.maps.Geocoder();
		geocoder.geocode({address: address}, function(results, status) {
			
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				marker.setPosition(results[0].geometry.location);
			}
			
		});
		
	});
	
	function initMap() {
		
		var lat = $('#latitude').val();
		var lng = $('#longitude').val();
		if (!lat) {
			lat = 34.702715; //35.681429;
			$('#latitude').val(lat);
		}
		if (!lng) {
			lng = 135.495908; //139.767095;
			$('#longitude').val(lng);
		}
		var latlng = new google.maps.LatLng(lat, lng);
		
		map = new google.maps.Map(document.getElementById('map'), {
			center: latlng,
			zoom: 14
		});
		
		marker = new google.maps.Marker({
			map: map,
			position: latlng,
			draggable: true
		});
		
		google.maps.event.addListener(marker, 'dragend', function(ev) {
			
			$('#latitude').val(ev.latLng.lat());
			$('#longitude').val(ev.latLng.lng());
			
		});
		
	}
	initMap();
});
</script>

@stop
