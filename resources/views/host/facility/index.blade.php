@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		施設情報
		<small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo url('host'); ?>"><i class="fa fa-dashboard"></i> ホーム</a></li>
	</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
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
							</tr>
							<tr>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@stop