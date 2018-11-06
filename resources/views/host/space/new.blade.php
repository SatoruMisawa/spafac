@extends('host.layouts.master')
@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			スペース編集
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('host') }}"><i class="fa fa-dashboard"></i> ホーム</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content container-fluid">
		@include('host.layouts.message', ['errors' => $errors])
		<div class="row">
			<div class="col-md-12">
				{{
					Form::open([
					'route' => ['host.facility.space.create', $facility->id],
					'method' => 'POST',
					])
				}}
					<div class="box box-info">
						<div class="box-header">,
							<h3 class="box-title">基本情報</h3>
							<div class="pull-right box-tools">
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['space_usage_ids']) }}">
								<label><small class="label bg-red">必須</small> 使用可能用途</label>
								@include('layouts.error', ['name' => 'space_usage_ids'])
								<p class="help-block">このスペースをどのような目的に使ってよいか選択してください。複数選択可能。</p>
								<div class="row checkbox">
									@foreach ($spaceUsages as $spaceUsage)
										<div class="col-md-4 col-sm-6">
											<label>
												{{
													Form::checkbox(
														'space_usage_ids[]',
														$spaceUsage->id,
														false
													)
												}}
												{{ $spaceUsage->name }}
											</label>
										</div>
									@endforeach
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['capacity']) }}">
								<label><small class="label bg-red">必須</small> 最大収容人数</label>
								@include('layouts.error', ['name' => 'capacity'])
								<div class="row">
									<div class="col-sm-6">
										<div class="input-group">
											{{
												Form::text(
													'capacity',
													null,
													[
														'class' => 'form-control',
														'placeholder' => '100'
													]
												)
											}}
											<span class="input-group-addon">人</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['floor_area']) }}">
								<label><small class="label bg-red">必須</small> 床面積</label>
								@include('layouts.error', ['name' => 'floor_area'])
								<div class="row">
									<div class="col-sm-6">
										<div class="input-group">
											{{
												Form::text(
													'floor_area',
													null,
													[
														'class' => 'form-control',
														'placeholder' => '100'
													]
												)
											}}
											<span class="input-group-addon">㎡</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group {{ App\Helper::errorClass($errors, ['key_delivery_id']) }}">
								<label><small class="label bg-red">必須</small> 鍵の受け渡し</label>
								@include('layouts.error', ['name' => 'key_delivery_id'])
								<p class="help-block">利用日当日の鍵の受け渡し方法を選択してください。</p>
								<div class="row radio">
									@foreach ($keyDeliveries as $keyDelivery)
										<div class="col-md-4 col-sm-6">
											<label>
												{{
													Form::radio(
														'key_delivery_id',
														$keyDelivery->id
													)
												}}
												{{ $keyDelivery->name }}
											</label>
										</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
							<button type="submit" class="btn btn-success pull-right">保存して進む</button>
						</div>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</section>
<!-- /.content -->
@endsection