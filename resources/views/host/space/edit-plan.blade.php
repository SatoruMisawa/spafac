@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		スペース編集
		<small><?php echo e($space->getTitle()); ?></small>
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
					<h3 class="box-title">プラン</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> プランの名称</label>
						<div class="row">
							<div class="col-xs-12">
								<input class="form-control" type="text" placeholder="プランの名称">
							</div>
						</div>
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 価格</label>
						<div class="row">
							<div class="col-xs-12">
								<input class="form-control" type="text" placeholder="プランの名称">
							</div>
						</div>
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 貸出可能な曜日・時間帯</label>
						<div class="row">
							<div class="col-xs-12">
								<input class="form-control" type="text" placeholder="プランの名称">
							</div>
						</div>
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 予約の承認方法</label>
						<div class="row">
							<div class="col-xs-12">
								<input class="form-control" type="text" placeholder="プランの名称">
							</div>
						</div>
					</div>
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