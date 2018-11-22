@extends('host.layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 622px;">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				{{
				Form::open([
				'route' => ['host.space.plan.create', $space->id],
				'method' => 'POST'
				])
				}}
				@csrf
				<div>
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">新規プラン作成</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="box-body pad">
							<div class="form-group ">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">プランの名前</div>
								</div>
								<p class="help-block">プランの名前を記述してください。</p>
								@include('layouts.error', ['name' => 'name'])
								<div class="row">
									<div class="col-sm-9">
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
							<!--content start-->
							<div class="form-group">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">価格</div>
								</div>
								@include('layouts.error', ['name' => 'by_hour'])
								@include('layouts.error', ['name' => 'price_per_hour'])
								@include('layouts.error', ['name' => 'by_day'])
								@include('layouts.error', ['name' => 'price_per_day'])
								<div class="row">
									<label><small class="label bg-red">必須</small> 価格</label>
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
							<div class="form-group">
								@include('layouts.error', ['name' => 'day_ids'])
								<table class="table">
									@foreach ($days as $day)
									<tr>
										<td>
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
										</td>
									</tr>
									@endforeach
								</table>
							</div>
							<div class="form-group">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">予約の承認方法</div>
								</div>
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
							<div class="form-group">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">予約の締切</div>
								</div>
								<p class="help-block">利用日の何日前に予約を締め切るかを設定してください。</p>
								<p class="help-block">例）「利用日の7日前」に設定→ゲストが4月8日に利用したい場合、4月1日以前に予約をする必要があります。</p>
								@include('layouts.error', ['name' => 'preorder_deadline_id'])
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
							<div class="form-group">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">予約の受付期間</div>
								</div>
								<p class="help-block">ゲストが予約リクエストする日を起点として、利用日が何ヶ月先までの予約を受け付けるか設定してください。</p>
								<p class="help-block">例）「12ヶ月先まで予約を受け付ける」を設定→2018年4月1日の場合、2019年4月1日まで予約を受け付けます。</p>
								@include('layouts.error', ['name' => 'preorder_period_id'])
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
							<div class="form-group">
								<div class="SDR4G06kguti">
									<div class="">任意</div>
									<div class="BMWerCSq5F">貸出可能な期間</div>
								</div>
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
						<!--box-body pad　END-->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">
								<font style="vertical-align: inherit;">
									<font class="preservation-button" style="vertical-align: inherit;">保存</font>
								</font>
							</button>
						</div>
					</div>
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</section>
</div>
@endsection

@section('script')
<script>
	$(function () {
		$('.datepicker').datepicker({
			autoclose: true,
			language: 'ja',
			altFormat: 'yy-mm-dd'
		})
	})
</script>
@endsection