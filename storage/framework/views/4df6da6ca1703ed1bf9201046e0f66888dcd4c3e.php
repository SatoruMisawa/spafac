<?php $__env->startSection('content'); ?>
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
	<?php echo $__env->make('host.layouts.message', array('errors' => $errors), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">プラン一覧</h3>
					<div class="pull-right box-tools">
						<a class="btn btn-success btn-sm" href="<?php echo url('host/plan/edit', $space->id); ?>"><i class="fa fa-plus"></i> 新規プランの作成</a>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>プランの名称</th>
								<th>価格</th>
								<th></th>
							</tr>
							<?php foreach ($plans as $plan) : ?>
							<tr>
								<td><?php echo e($plan->name); ?></td>
								<td><?php echo e($plan->getPrice()); ?></td>
								<td>
									<a class="btn btn-warning btn-xs" href="<?php echo url('host/plan/edit', [$space->id, $plan->id]); ?>">編集</a>
									<a class="btn btn-default btn-xs delete-button" href="<?php echo url('host/plan/delete', [$space->id, $plan->id]); ?>" data-name="No.<?php echo e($plan->id); ?>">削除</a>
								</td>
							</tr>
							<?php endforeach; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>