@extends('host.layouts.master')

@section('content')
@incude('host.layouts.sidebar')
<div class="content-wrapper" style="min-height: 622px;">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				{{
				Form::open([
				'route' => ['host.space.messagetemplate.create', $space->id],
				'method' => 'POST',
				])
				}}
				@csrf
				<div class="box box-info">
					<div class="box-header">
						<h1 class="box-title">定型文</h1>
						<div class="pull-right box-tools"></div>
					</div>
					<div class="box-body pad">
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb bg-blue">任意</div>
								<div class="BMWerCSq5F">予約確定時</div>
							</div>
							<p class="help-block">予約の確定（支払完了）時に設定した内容のメッセージが自動でゲストに送られます。</p>
							@include('layouts.error', ['name' => 'on_apply_approved'])
							<div class="row">
								<div class="col-sm-9">
									{{
									Form::textarea(
									'on_apply_approved',
									null,
									[
									'class' => 'form-control',
									'rows' => '6',
									'placeholder' => '例）鍵の受け渡しは当日受付にて行います。プロジェクター、Wi-Fi、ホワイトボードなど一式無料でご利用できますのでご安心ください。',
									]
									)
									}}
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb bg-blue">任意</div>
								<div class="BMWerCSq5F">予約否認時</div>
							</div>
							<p class="help-block">予約の否認時に設定した内容のメッセージが自動でゲストに送られます。</p>
							@include('layouts.error', ['name' => 'on_apply_rejected'])

							<div class="row">
								<div class="col-sm-9">
									{{
									Form::textarea(
									'on_apply_rejected',
									null,
									[
									'class' => 'form-control',
									'rows' => '6',
									'placeholder' => '例）大変申し訳ありません。本日程ですが、ビルの緊急メンテナンス日となってしまいました。またご予約いただけますことを心よりお待ちしております。',
									]
									)
									}}
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="SDR4G06kguti">
								<div class="FBtyNIKsrTb bg-blue">任意</div>
								<div class="BMWerCSq5F">利用日前日のリマインド</div>
							</div>
							<p class="help-block">利用日の前日に設定したメッセージが自動でゲストに送られます。</p>
							@include('layouts.error', ['name' => 'reminder'])
							<div class="row">
								<div class="col-sm-9">
									{{
									Form::textarea(
									'reminder',
									null,
									[
									'class' => 'form-control',
									'rows' => '6',
									'placeholder' => '明日の利用時の案内を再度送ります。鍵の開け方、キッチンの利用方法、ゴミの片付け方をご確認ください。',
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
				</form>
			</div>
		</div>
	</section>
</div>
@endsection
{{-- @extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		新規定型文
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
			'route' => ['host.space.messagetemplate.create', $space->id],
			'method' => 'POST',
			])
			}}
			<div class="box box-info">
				<div class="box-body pad">
					<div class="form-group {{ App\Helper::errorClass($errors, ['on_apply_approved']) }}">
						<label><small class="label bg-red">必須</small> 予約確定時</label>
						@include('layouts.error', ['name' => 'on_apply_approved'])
						<p class="help-block"></p>
						<div class="row">
							<div class="col-sm-9">
								{{
								Form::textarea(
								'on_apply_approved',
								null,
								[
								'class' => 'form-control',
								'rows' => '6',
								]
								)
								}}
							</div>
						</div>
					</div>

					<div class="form-group {{ App\Helper::errorClass($errors, ['on_apply_rejected']) }}">
						<label><small class="label bg-red">必須</small> 予約否認時</label>
						@include('layouts.error', ['name' => 'on_apply_rejected'])
						<p class="help-block"></p>
						<div class="row">
							<div class="col-sm-9">
								{{
								Form::textarea(
								'on_apply_rejected',
								null,
								[
								'class' => 'form-control',
								'rows' => '6',
								]
								)
								}}
							</div>
						</div>
					</div>

					<div class="form-group {{ App\Helper::errorClass($errors, ['reminder']) }}">
						<label><small class="label bg-red">必須</small> 前日リマインドメッセージ</label>
						@include('layouts.error', ['name' => 'reminder'])
						<p class="help-block"></p>
						<div class="row">
							<div class="col-sm-9">
								{{
								Form::textarea(
								'reminder',
								null,
								[
								'class' => 'form-control',
								'rows' => '6',
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
@endsection --}}