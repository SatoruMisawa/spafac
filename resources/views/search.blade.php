@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="<?php echo url('assets/css/search.css'); ?>">
@stop
@section('content')

<form method="get" action="{{action('SearchController@searchindex')}}">
<div class="inner cf select_wrap" >
	<div class="eria">
		<label for="select_2" class="select-1">
					<input type="text" name="area" value="" placeholder = "エリア"></input>
		</label>
	</div>
	<div class="time">
		<label for="select_3" class="select-1">
			<select name="plan" id="select_3">
				<option value='' disabled selected style='display:none;'></option>
				<option value="選択肢2">指定なし</option>
				<option value="選択肢2">時間単位で予約</option>
				<option value="選択肢3">1日単位で予約</option>
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
			<input type="date" name="day">
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
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
				<option value="50">50</option>
				<option value="60">75</option>
				<option value="100">100</option>
				<option value="150">150</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				<option value="1000">1000</option>
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

	<div class="box-footer">
		<button type="submit" class="btn btn-success pull-right">検索する</button>
		<input type="hidden" name="space_usage_id" class="checkbox01-input" value="{{$space_usage_id}}">
	</div>


</form>

	<div class="search_btn"> <a href="">
		詳細検索</a>
	</div>
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

	<?php echo $space_usage_id;
		echo $room;
		/*	echo $area;
			echo $plan;
			echo $price;
			echo $day;
			echo $starttime;
			echo $endtime;
			echo $men;*/
	 ?>


	 <section class="gray pattern_1" id="party">
	 	<div class="pattern_title">
	 		<h2>飲食・パーティ</h2>
	 	</div>

	 	<div class="pattern_box">
	     <div class="pac">
			@foreach($room as $data)
			<a href="{{ action('SpaceController@index', $data->id ) }}">
	 		<div class="pattern_boxs">
	 			<div class="pics"><img src="<?php echo url('assets/mypage/img/photo-14.png'); ?>" alt=""></div><span class="star">★★★★★</span>
	 			<p>{{$data->name}}</p>
				<p>{{$data->address1}}</p>
				<p>{{$data->capacity}}人</p>
				<p>{{$data->address1}}</p>
				<p>{{$data->address2}}</p>
				<p>{{$data->price_per_hour}}円/時</p>
				<p>{{$data->price_per_day}}円/日</p>
				<p>{{$data->from}}</p>
				<p>{{$data->to}}</p>

	 		</div>
		</a>
			@endforeach
	 	</div>
	 	</div>
	 	<a class="detail" href="/purpose/party">飲食・パーティで利用できるスペースをもっと見る &raquo;</a>
	 </section>
		<!--<div id="main">
			<div class="list_wrap cf">
				<?php //foreach ($spaces as $space) : ?>
					<!-- box　-->
					<!--<div class="box_wrap">
						<div class="fig_wrap">
							<a href="<?php //echo url('space', $space->id); ?>">
							<img src="<?php //echo url('space/media', array($space->getMediaId(), 600, 400, 1)); ?>" alt="写真"></a>
							<div class="price_box"> <?php //echo $space->getPriceRange(); ?> <i class="fa fa-flash fa-lg"></i></div>
						</div>
						<div class="box_txt">
							<p><?php //echo e($space->title); ?></p>
							<p><img src="<?php //echo url('assets/mypage/img/man.png'); ?>" alt="写真">～<?php //echo e($space->capacity); ?>人 <?php //echo e($space->institution->getShortAddress()); ?>　
								<img src="<?php //echo url('assets/mypage/img/star.jpg'); ?>" alt="写真">　000件</p>
							<p><?php //echo e($space->institution->access); ?></p>
						</div>
					</div>
					<!-- /box_wrap　-->
				<?php //endforeach; ?>
			</div>
			<!-- /list_wrap　-->

		</div>
		<!-- /main　-->
		<div id="aside">
			<div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d829778.0708004539!2d139.18106809294216!3d35.66910737612222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO95p2x5Lqs!5e0!3m2!1sja!2sjp!4v1524714717288"
				width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
		</div>
		<!-- /side　-->
	</div>
</section>
@stop

@section('script')
@stop
