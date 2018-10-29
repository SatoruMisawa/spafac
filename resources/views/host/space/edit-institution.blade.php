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
	@include('host.layouts.message', array('errors' => $errors))
	<div class="row">
		<div class="col-md-12">
			<?php echo Form::model($space, array('action' => array('Host\SpaceController@confirmInstitution', $space->id))); ?>
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
							<a class="btn btn-success btn-sm" href="<?php echo url('host/institution/edit'); ?>"><i class="fa fa-plus"></i> 新規施設の作成</a>
						</div>
					</div>
					<div class="box-body pad <?php echo App\Helper::errorClass($errors, ['institution_id']); ?>">
						<?php echo App\Helper::error($errors, ['institution_id']); ?>
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
								<?php foreach ($institutions as $institution) : ?>
								<tr>
									<td>
										<label><?php echo Form::radio('institution_id', $institution->id, null, []); ?></label>
									</td>
									<td><?php echo e($institution->institutionKind->name); ?></td>
									<td><?php echo e($institution->name); ?></td>
									<td><?php echo e($institution->zip); ?></td>
									<td><?php echo e($institution->getAddress()); ?></td>
									<td><?php echo e($institution->tel); ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="box-footer">
						<!--<button type="submit" class="btn btn-default" disabled>保存して戻る</button>-->
						<button type="submit" class="btn btn-success pull-right">保存して進む</button>
					</div>
				</div>
			<?php echo Form::close(); ?>
		</div>
	</div>
</section>
<!-- /.content -->
@stop