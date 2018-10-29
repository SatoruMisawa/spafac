<?php $__env->startSection('content'); ?>
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
	<?php echo $__env->make('host.layouts.message', array('errors' => $errors), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							<?php foreach ($institutions as $institution) : ?>
							<tr>
								<td><?php echo e($institution->institutionKind->name); ?></td>
								<td><?php echo e($institution->name); ?></td>
								<td><?php echo e($institution->zip); ?></td>
								<td><?php echo e($institution->getAddress()); ?></td>
								<td><?php echo e($institution->tel); ?></td>
								<td>
									<a class="btn btn-warning btn-xs" href="<?php echo url('host/institution/edit', $institution->id); ?>">編集</a>
									<a class="btn btn-default btn-xs delete-button" href="<?php echo url('host/institution/delete', $institution->id); ?>" data-name="No.<?php echo e($institution->id); ?>">削除</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>