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
			<?php echo Form::model($space, array('action' => array('Host\SpaceController@confirmExplanation', $space->id))); ?>
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">説明文</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['title']); ?>">
							<label><small class="label bg-red">必須</small> スペースの見出し</label>
							<p class="help-block">キャッチコピーやスペースの特徴を記入してください。最大64文字。</p>
							<?php echo App\Helper::error($errors, ['title']); ?>
							<div class="row">
								<div class="col-xs-12">
									<?php echo Form::text('title', null, ['class' => 'form-control']); ?>
								</div>
							</div>
							<p class="help-block">例）キッチン付きリノベスペース！女子会・誕生日会・ママ会・コスプレ撮影・会議利用などに！</p>
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['explanation']); ?>">
							<label><small class="label bg-red">必須</small> スペースについて</label>
							<p class="help-block">スペースの情報、利用用途、周辺施設について説明してください。10文字以上800文字以内。</p>
							<?php echo App\Helper::error($errors, ['explanation']); ?>
							<div class="row">
								<div class="col-xs-12">
									<?php echo Form::textarea('explanation', null, ['class' => 'form-control']); ?>
								</div>
							</div>
							<p class="help-block">例）女子会や誕生日会から会議まで様々な用途でご利用です。マンションの前にコンビニ、最寄り駅前にスーパーがあります。</p>
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['facility']); ?>">
							<label><small class="label bg-red">必須</small> 設備・サービスについて</label>
							<p class="help-block">設備やサービスについて説明を記述してください。10文字以上800文字以内。</p>
							<?php echo App\Helper::error($errors, ['facility']); ?>
							<div class="row">
								<div class="col-xs-12">
									<?php echo Form::textarea('facility', null, ['class' => 'form-control']); ?>
								</div>
							</div>
							<p class="help-block">例）Wi-Fi、ホワイトボード完備で会議からイベントまでご利用いただけます。その他必要な備品につきましては予約リクエスト時にお問い合わせください。</p>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
						<button type="submit" class="btn btn-success pull-right">保存して進む</button>
					</div>
				</div>
			<?php echo Form::close(); ?>
		</div>
	</div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>