@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		新規スペース
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
					<h3 class="box-title">施設情報</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 施設の選択</label>
						<p class="help-block">スペースの番所に関する情報です。同一の施設に複数のスペースを登録できます。スペースを登録する施設を選択してください。</p>
						<a class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> 新規施設の作成</a>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th></th>
								<th>種類</th>
								<th>施設名</th>
								<th>郵便番号</th>
								<th>住所</th>
								<th>電話番号</th>
							</tr>
							<tr>
								<td>
									<label><input type="radio" name="facility"></label>
								</td>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>
									<label><input type="radio" name="facility"></label>
								</td>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>
									<label><input type="radio" name="facility"></label>
								</td>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>
									<label><input type="radio" name="facility"></label>
								</td>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
							<tr>
								<td>
									<label><input type="radio" name="facility"></label>
								</td>
								<td>住宅</td>
								<td>ハイツ緑ヶ丘</td>
								<td>000-0000</td>
								<td>東京都調布市緑ヶ丘1丁目</td>
								<td>00-0000-0000</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
					<button type="submit" class="btn btn-success pull-right">保存して進む</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@stop