@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		施設情報
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
					<h3 class="box-title">施設一覧</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>種類</th>
								<th>施設名</th>
								<th>郵便番号</th>
								<th>住所</th>
								<th>電話番号</th>
								<th></th>
							</tr>
							@foreach ($facilities as $facility)
							<tr>
								<td>{{ $facility->facilityKind->name }}</td>
								<td>{{ $facility->name }}</td>
								<td>{{ $facility->tel }}</td>
								<td>{{ $facility->address->zip }}</td>
								<td>{{ $facility->address->address1 }}</td>
								<td>
									<a class="btn btn-warning btn-xs" href="">編集</a>
									<a class="btn btn-default btn-xs delete-button" href="" data-name="No.{{ $facility->id }}">削除</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@stop