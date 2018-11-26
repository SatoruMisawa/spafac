@extends('layouts.master')
@section('css')
@stop
@section('content')
	<!--<div class="search_btn"> <a href="">
		詳細検索</a>
	</div>-->
	<div class="inner cf select_wrap" >
		<form method="get" action="{{action('SearchController@searchindex')}}">
		<div class="eria">
			<label for="select_2" class="select-1">
				<input id="pac-input" type="text" name="area" placeholder="エリア">
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq2kSVHGO-_H7Ls1bm7rduFQ4V5Xw9TE&libraries=places"></script>
					<script type="text/javascript">
					// Create the search box and link it to the UI element.
					var defaultBounds = new google.maps.LatLngBounds(
					  new google.maps.LatLng(34.702715, 135.495908));
					var input = document.getElementById('pac-input');
					var componentForm = {
			        street_number: 'short_name',
			        route: 'long_name',
			        locality: 'long_name',
			        administrative_area_level_1: 'short_name',
			        country: 'long_name',
			        postal_code: 'short_name'
			      };
					var options = {
										  bounds: defaultBounds,
										  types: ['geocode']
										};
					var searchBox;
					function initAutocomplete() {
						searchBox = new google.maps.places.SearchBox(input, options);
							autocomplete.addListener('place_changed', fillInAddress);
					}


					function fillInAddress() {
			        // Get the place details from the autocomplete object.
			        var place = autocomplete.getPlace();

			        for (var component in componentForm) {
			          document.getElementById(component).value = '';
			          document.getElementById(component).disabled = false;
			        }

			        // Get each component of the address from the place details
			        // and fill the corresponding field on the form.
			        for (var i = 0; i < place.address_components.length; i++) {
			          var addressType = place.address_components[i].types[0];
			          if (componentForm[addressType]) {
			            var val = place.address_components[i][componentForm[addressType]];
			            document.getElementById(addressType).value = val;
			          }
			        }
							input.value = this.getPlace().name;
			      }

						// Bias the autocomplete object to the user's geographical location,
			      // as supplied by the browser's 'navigator.geolocation' object.
			      function geolocate() {
			        if (navigator.geolocation) {
			          navigator.geolocation.getCurrentPosition(function(position) {
			            var geolocation = {
			              lat: position.coords.latitude,
			              lng: position.coords.longitude
			            };
			            var circle = new google.maps.Circle({
			              center: geolocation,
			              radius: position.coords.accuracy
			            });
			            autocomplete.setBounds(circle.getBounds());
			          });
			        }
			      }

					</script>
			</label>
		</div>
		<div class="time">
			<label for="select_3" class="select-1">
				<select name="plan" id="select_3">
					<option value='' disabled selected style='display:none;'></option>
					<option value="1">指定なし</option>
					<option value="2">時間単位で予約</option>
					<option value="3">1日単位で予約</option>
				</select>
			</label>
		</div>
		<div class="price">
			<label for="select_4" class="select-1">
				<select name="price" id="select_4">
					<option value='' disabled selected style='display:none;'>価格帯</option>
					<option value="選択肢2">選択肢1</option>
					<option value="選択肢2">選択肢2</option>
					<option value="選択肢3">選択肢3</option>
				</select>
			</label>
		</div>
		<div class="day">
				<label for="select_5" class="select-1">利用日
					<input type="date" name="day"id="select_5">
				</label>
		</div>
		<div class="start">
			<label for="select_6" class="select-1">開始
				<input type="time" name="starttime">
			</label>
		</div>
		<div class="end">
			<label for="select_7" class="select-1">終了
				<input type="time" name="endtime">

			</label>
		</div>
		<div class="nin">
			<label for="select_8" class="select-1">
				<select name="men" id="select_8">
					<option value='' disabled selected style='display:none;'>人数</option>
					<option value="10">〜10</option>
					<option value="20">〜20</option>
					<option value="30">〜30</option>
					<option value="40">〜40</option>
					<option value="50">〜50</option>
					<option value="60">〜75</option>
					<option value="100">〜100</option>
					<option value="150">〜150</option>
					<option value="200">〜200</option>
					<option value="300">〜300</option>
					<option value="400">〜400</option>
					<option value="500">〜500</option>
					<option value="1000">〜1000</option>
				</select>
			</label>
		</div>
		<div class="yoyaku">
			<div class="checkbox02"> <label>
				<input type="checkbox" name="checkbox01[]" class="checkbox01-input" value="on">
				<span class="checkbox01-parts"><i class="fa fa-flash fa-lg"></i> 今すぐ予約可</span>
				</label>
			</div>
		</div>
	<div class="search_btn">
			<button type="submit" class="btn btn-success pull-right">検索する</button>
			<input type="hidden" name="space_usage_id" class="checkbox01-input" value="{{$space_usage_id}}">
		</div>
	</form>
	</div>
<section>

	<div class="inner cf">
		<div class="main_top cf">
			<div class="kekka"><span class="f18">スペース検索結果</span>　<?php //echo e($spaces->total()); ?>件</div>
			<div class="reco">
				<label for="select_9" class="select-1">
					<select name="select_9" id="select_9">
						<option value='' disabled selected style='display:none;'>おすすめ順</option>
						<option value="選択肢2">選択肢1</option>
						<option value="選択肢2">選択肢2</option>
						<option value="選択肢3">選択肢3</option>
					</select>
				</label>
			</div>
		</div>
		<!-- /main_top　-->
	</div>
</section>
<section>
<div class="inner cf">
	<div id="main">
			<div class="list_wrap cf">

					@foreach($room as $data)
					<!-- box　-->
					<div class="box_wrap">
						<div class="fig_wrap">
							<a href="{{ action('SpaceController@index', $data->facility_id ) }}">
							<img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt="写真"></a>
							<div class="price_box">{{$data->price_per_hour}}円/時 <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p>{{$data->name}}</p>
							<p><img src="<?php echo url('assets/mypage/img/man.png'); ?>" alt="写真">～{{$data->capacity}}人 <?php //echo e($space->institution->getShortAddress()); ?>　
								<img src="<?php echo url('assets/mypage/img/star.jpg'); ?>" alt="写真"></p>
							<p>{{$data->access}}</p>
						</div>
					</div>
					<!-- /box_wrap　-->
				@endforeach
			</div>
			<!-- /list_wrap　-->
		</div>
		<!-- /main　-->


		<div id="aside">
			<div class="map">



				<div id="searchmap" style="width: 300px; height:700px; box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1), 0 8px 20px rgba(0, 0, 0, 0.1);"></div>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq2kSVHGO-_H7Ls1bm7rduFQ4V5Xw9TE&libraries=places"></script>
        <script type="text/javascript">

				$(function() {
					var map;
					var marker = [];
					var markerData = {!! json_encode($room) !!};

					console.log(markerData);


					function initMap() {

						// Create the search box and link it to the UI element.
		        var input = document.getElementById('pac-input');
		        var searchBox = new google.maps.places.SearchBox(input);

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

						map = new google.maps.Map(document.getElementById('searchmap'), {
							center: latlng,
							zoom: 14
						});


						/*map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

						// Bias the SearchBox results towards current map's viewport.
						map.addListener('bounds_changed', function() {
							searchBox.setBounds(map.getBounds());
						});*/


						<?php for ( $i = 0; $i < count($room); $i++) {?>
							var i = <?php echo json_encode($i); ?>;
							//緯度を変数に代入
							var latitude = Number(markerData[i]['latitude']);
							// 経度を変数に代入
							var longitude = Number(markerData[i]['longitude']);
							 markerLatLng = new google.maps.LatLng({
										 lat: latitude,
										 lng: longitude}); // 緯度経度のデータ作成
							 marker[i] = new google.maps.Marker({ // マーカーの追加
							 position: markerLatLng, // マーカーを立てる位置を指定
							 map: map, // マーカーを立てる地図を指定

						});
					//	var build_id = markerData[i]['build_id'];

							markerEvent(i); // マーカーにクリックイベントを追加
							bounds.extend(markerLatLng);

							clusterer.push(marker[i]);
						<?php }?>




					/*	marker = new google.maps.Marker({
							map: map,
							position: latlng,
							draggable: true
						});

						google.maps.event.addListener(marker, 'dragend', function(ev) {

							$('#latitude').val(ev.latLng.lat());
							$('#longitude').val(ev.latLng.lng());

						});*/

					}
					initMap();
				});


           </script>
			 </div>
		</div>
		<!-- /side　-->
	</div>
</section>
@stop

@section('script')
@stop
