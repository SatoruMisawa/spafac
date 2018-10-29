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
			<?php echo Form::model($space, array('action' => array('Host\SpaceController@confirmMedia', $space->id))); ?>
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">写真・動画</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 写真</label>
						<p class="help-block">ゲストが実際に利用するスペース、設備等の画像を最低1枚追加してください。推奨サイズは1260x840です。ドラッグ＆ドロップで入れ替え可。クリックで拡大することができます。最大30枚まで追加できます。</p>
					</div>

					<div class="form-group <?php echo App\Helper::errorClass($errors, 'space_photo_id'); ?>">
						<div id="space-photo-uploader">
							<?php echo App\Helper::error($errors, 'space_photo_id'); ?>
							<div>
								<ul class="media-container">
								</ul>
							</div>
							<div class="fix"></div>
							<div class="drag-area">
								<span>アップロードするファイルをここにドロップ　(最大画像ファイルサイズ<?php echo ini_get('upload_max_filesize'); ?>バイト)</span>
							</div>
							<p>
								または、
								<a class="btn btn-success btn-sm media-button" href="#"><i class="fa fa-plus"></i> 新規写真の作成</a>
								<input type="file" multiple="multiple" style="display: none;">
							</p>
							<span class="help-block text-red">※画像は 600 x 800 で作成してください。</span>
							
							<!-- 写真テンプレート -->
							<li class="media-template ui-state-default" style="display: none; width: 135px; height: 180px;">
								<input type="hidden" class="id">
								<input type="hidden" class="media_id">
								<img src="" class="preview img-responsive">
								<img src="<?php echo url('img/ico-delete.gif'); ?>" class="delete-media">
							</li>

						</div>
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

<?php $__env->startSection('script'); ?>
<script>
$(function() {
	
	//写真
	var spacePhotoList = <?php echo App\Media::jsonMulti($spacePhotoList); ?>;
	var spacePhoto = new Media({
		baseName: 'spacePhotoList',
		mediaList: spacePhotoList,
		uploader: 'space-photo-uploader',
		thumbnail: '/host/space/media'
	});
	
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>