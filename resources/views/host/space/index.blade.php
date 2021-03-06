@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		スペース管理
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
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">スペース一覧</h3>
					<div class="pull-right box-tools">
						<a class="btn btn-success btn-sm" href="{{ url('host/space/edit-institution') }}"><i class="fa fa-plus"></i> 新規スペースの作成</a>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>施設名</th>
								<th>施設の種類</th>
								<th>電話番号</th>
								<th>郵便番号</th>
								<th>住所</th>
								<th></th>
							</tr>
							@foreach ($spaces as $space)
							<tr>
								<td>{{ $space->facility->name }}</td>
								<th>{{ $space->facility->facilityKind->name }}</th>
								<td>{{ $space->facility->tel }}</td>
								<td>{{ $space->facility->address->zip }}</td>
								<td>{{ $space->facility->address->address1 }}</td>
								<td>
									<a class="btn btn-warning btn-xs" href="{{ route('host.facility.space.edit', [$space->facility->id, $space->id]) }}">編集</a>
									<a class="btn btn-default btn-xs delete-button" href="" data-name="No.{{ $space->id }}">削除</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="box-footer">
					<!--
					<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
					<button type="submit" class="btn btn-success pull-right">保存して進む</button>
					-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@stop