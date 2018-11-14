@extends('host.layouts.master')
@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			新規プラン
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
						'route' => ['host.space.plan.create', $space->id],
						'method' => 'POST'
					])
				}}
					<div class="box box-info">
						<div class="box-header">
							<h3 class="box-title">プラン</h3>
							<div class="pull-right box-tools">
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['name']) }}">
								<label><small class="label bg-red">必須</small> プランの名称</label>
								@include('layouts.error', ['name' => 'name'])
								<div class="row">
									<div class="col-xs-12">
										{{
											Form::text(
												'name', 
												null,
												[
													'class' => 'form-control',
													'placeholder' => 'プランの名称'
												]
											)
										}}
									</div>
								</div>
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group">
								<label><small class="label bg-red">必須</small> 価格</label>
								@include('layouts.error', ['name' => 'by_hour'])
								@include('layouts.error', ['name' => 'price_per_hour'])
								@include('layouts.error', ['name' => 'by_day'])
								@include('layouts.error', ['name' => 'price_per_day'])
								<table class="table">
									<tr>
										<td>
											<div class="form-group {{ App\Helper::errorClass($errors, ['by_hour', 'price_per_hour']) }}">
												<div class="row">
													<label class="col-sm-2 form-control-static">時間価格</label>
													<div class="col-sm-2 col-sm-offset-1">
														<label class="form-control-static">
															{{ Form::checkbox('by_hour', 1) }} 有効
														</label>
													</div>
													<div class="col-sm-3 col-sm-offset-4">
														<div class="input-group">
															{{
																Form::text(
																	'price_per_hour',
																	null,
																	['class' => 'form-control']
																)
															}}
															<span class="input-group-addon">円&nbsp;/&nbsp;時間</span>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group {{ App\Helper::errorClass($errors, ['by_day', 'price_per_day']) }}">
												<div class="row">
													<label class="col-sm-2 form-control-static">一日価格</label>
													<div class="col-sm-2 col-sm-offset-1">
														<label class="form-control-static">
															{{ Form::checkbox('by_day', 1) }} 有効
														</label>
													</div>
													<div class="col-sm-3 col-sm-offset-4">
														<div class="input-group">
															{{
																Form::text(
																	'price_per_day',
																	null,
																	['class' => 'form-control']
																)
															}}
															<span class="input-group-addon">円&nbsp;/&nbsp;日</span>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="box-body pad">
							<div class="form-group">
								<label><small class="label bg-red">必須</small> 貸出可能な曜日・時間帯</label>
								@include('layouts.error', ['name' => 'day_ids'])
								<table class="table">
									@foreach ($days as $day)
										<tr>
											<td>
												<div class="form-group {{ App\Helper::errorClass($errors, ['hour_from['.$day->id.']', 'hour_to['.$day->id.']']) }}">
													@include('layouts.error', ['name' => 'hour_from['.$day->id.']'])
													@include('layouts.error', ['name' => 'hour_to['.$day->id.']'])
													<div class="row">
														<label class="col-sm-2 form-control-static">{{ $day->name }}</label>
														<div class="col-sm-2 col-sm-offset-1">
															<label class="form-control-static">
																{{ Form::checkbox('day_ids[]', $day->id, false) }} 有効
															</label>
														</div>
														<div class="col-sm-3">
															<div class="input-group">
																{{
																	Form::select(
																		'hour_from['.$day->id.']',
																		array_keys(array_fill(0, 37, 0)),
																		null,
																		['class' => 'form-control']
																	)
																}}
																<span class="input-group-addon">:00</span>
															</div>
														</div>
														<div class="col-sm-1">
															<label class="form-control-static">～</label>
														</div>
														<div class="col-sm-3">
															<div class="input-group">
																	{{
																		Form::select(
																			'hour_to['.$day->id.']',
																			array_keys(array_fill(0, 37, 0)),
																			null,
																			['class' => 'form-control']
																		)
																	}}
																<span class="input-group-addon">:00</span>
															</div>
														</div>
													</div>
												</div>
											</td>
										</tr>
									@endforeach
								</table>
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['need_to_be_approved']) }}">
								<label><small class="label bg-red">必須</small> 予約の承認方法</label>
								@include('layouts.error', ['name' => 'need_to_be_approved'])
								<div class="row radio">
									<div class="col-sm-6">
										<label>
											{{ Form::radio('need_to_be_approved', 0) }} 承認なし/今すぐ予約
										</label>
									</div>
									<div class="col-sm-6">
										<label>
											{{ Form::radio('need_to_be_approved', 1) }} 承認あり
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['preorder_deadline_id']) }}">
								<label><small class="label bg-red">必須</small> 予約の締切</label>
								@include('layouts.error', ['name' => 'preorder_deadline_id'])
								<p class="help-block">利用日の何日前に予約を締め切るかを設定してください。</p>
								<p class="help-block">例）「利用日の7日前」に設定→ゲストが4月8日に利用したい場合、4月1日以前に予約をする必要があります。</p>
								<div class="row">
									<div class="col-sm-6">
										{{
											Form::select(
												'preorder_deadline_id',
												['' => '選択してください'] + $preorderDeadlines,
												null,
												['class' => 'form-control']
											)
										}}
									</div>
								</div>
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['preorder_period_id']) }}">
								<label><small class="label bg-red">必須</small> 予約の受付期間</label>
								@include('layouts.error', ['name' => 'preorder_period_id'])
								<p class="help-block">ゲストが予約リクエストする日を起点として、利用日が何ヶ月先までの予約を受け付けるか設定してください。</p>
								<p class="help-block">例）「12ヶ月先まで予約を受け付ける」を設定→2018年4月1日の場合、2019年4月1日まで予約を受け付けます。</p>
								<div class="row">
									<div class="col-sm-6">
										{{
											Form::select(
												'preorder_period_id',
												['' => '選択してください'] + $preorderPeriods,
												null,
												['class' => 'form-control']
											)
										}}
									</div>
								</div>
							</div>
						</div>
						<div class="box-body pad">
							<div class="form-group {{ App\Helper::errorClass($errors, ['period_from', 'period_to']) }}">
								<label><small class="label bg-blue">任意</small> 貸出可能な期間</label>
								@include('layouts.error', ['name' => 'period_from'])
								@include('layouts.error', ['name' => 'period_to'])
								<div class="row">
									<div class="col-sm-4">
										{{
											Form::text(
												'period_from',
												null,
												[
													'class' => 'form-control datepicker',
													'placeholder' => ''
												]
											)
										}}
									</div>
									<div class="col-sm-1">
										～
									</div>
									<div class="col-sm-4">
										{{
											Form::text(
												'period_to',
												null,
												[
													'class' => 'form-control datepicker',
													'placeholder' => ''
												]
											)
										}}
									</div>
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