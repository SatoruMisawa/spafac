<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		スペースオーナー情報の設定
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
			<?php echo Form::model($host, array('action' => array('Host\AccountController@confirmAddress'), 'class' => 'h-adr')); ?>
				<input type="hidden" class="p-country-name" value="Japan">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">住所</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group">
							<label>担当者の住所</label>
							<p class="help-block">アカウントで登録した身分証明書類に記載の住所を入力してください。</p>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['zip']); ?>">
							<label><small class="label bg-red">必須</small> 郵便番号</label>
							<p class="help-block">ハイフンなしの半角数字。入力すると住所が自動補完されます。</p>
							<?php echo App\Helper::error($errors, ['zip']); ?>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('zip', null, ['class' => 'form-control p-postal-code', 'maxlength' => '7', 'placeholder' => '例）5300001']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['prefecture_id']); ?>">
							<label><small class="label bg-red">必須</small> 都道府県</label>
							<?php echo App\Helper::error($errors, ['prefecture_id']); ?>
							<div class="row">
								<div class="col-sm-6">
									<?php echo Form::select('prefecture_id', ['' => '選択してください'] + $prefectureList, null, ['class' => 'form-control p-region-id']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['address1', 'address1_kana']); ?>">
							<label><small class="label bg-red">必須</small> 市区町村</label>
							<?php echo App\Helper::error($errors, ['address1', 'address1_kana']); ?>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address1', null, ['class' => 'form-control p-locality', 'maxlength' => '100', 'placeholder' => '例）大阪市北区']); ?>
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address1_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）オオサカシキタク']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['address2', 'address2_kana']); ?>">
							<label><small class="label bg-red">必須</small> 町名・番地</label>
							<?php echo App\Helper::error($errors, ['address2', 'address2_kana']); ?>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address2', null, ['class' => 'form-control p-street-address', 'maxlength' => '100', 'placeholder' => '例）梅田0丁目0-0']); ?>
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address2_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ウメダ0チョウメ0-0']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['address3', 'address3_kana']); ?>">
							<label><small class="label bg-blue">任意</small> ビル名・部屋番号</label>
							<?php echo App\Helper::error($errors, ['address3', 'address3_kana']); ?>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address3', null, ['class' => 'form-control p-extended-address', 'maxlength' => '100', 'placeholder' => '例）梅田古民家ビル']); ?>
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-sm-9">
									<?php echo Form::text('address3_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ウメダコミンカビル']); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="prevButton" class="btn btn-default" disabled>保存して戻る</button>
						<button type="submit" name="nextButton" class="btn btn-success pull-right">保存して進む</button>
					</div>
				</div>
			<?php echo Form::close(); ?>
		</div>
	</div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>