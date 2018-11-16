@extends('host.layouts.master')
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
@endsection