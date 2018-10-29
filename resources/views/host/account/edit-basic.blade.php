@extends('host.layouts.master')
@section('content')
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
	@include('host.layouts.message', array('errors' => $errors))
	<div class="row">
		<div class="col-md-12">
			<?php echo Form::model($host, array('action' => array('Host\AccountController@confirmBasic'))); ?>
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">基本情報</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['name1', 'name2', 'name1_kana', 'name2_kana']); ?>">
							<label><small class="label bg-red">必須</small> 担当者氏名</label>
							<?php echo App\Helper::error($errors, ['name1', 'name2', 'name1_kana', 'name2_kana']); ?>
							<p class="help-block">漢字</p>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('name1', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）山田']); ?>
								</div>
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('name2', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）太郎']); ?>
								</div>
							</div>
							<p class="help-block">フリガナ</p>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('name1_kana', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）ヤマダ']); ?>
								</div>
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('name2_kana', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）タロウ']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['sex']); ?>">
							<label><small class="label bg-red">必須</small> 性別</label>
							<?php echo App\Helper::error($errors, ['sex']); ?>
							<div class="row radio">
								<div class="col-md-3 col-xs-6"><label><?php echo Form::radio('sex', 1, true, []); ?> 男性</label></div>
								<div class="col-md-3 col-xs-6"><label><?php echo Form::radio('sex', 2, false, []); ?> 女性</label></div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['birth_date']); ?>">
							<label><small class="label bg-red">必須</small> 生年月日</label>
							<?php echo App\Helper::error($errors, ['birth_date']); ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group date">
										<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
										<?php echo Form::text('birth_date', null, ['class' => 'form-control pull-right datepicker', 'maxlength' => '10', 'placeholder' => '例）1981-02-09']); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, 'profile_media_id'); ?>">
							<label><small class="label bg-red">必須</small> プロフィール画像</label>
							<div id="profile-uploader">
								<?php echo App\Helper::error($errors, 'profile_media_id'); ?>
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
								<!--<span class="help-block text-red">※画像は 600 x 800 で作成してください。</span>-->
								
								<!-- 写真テンプレート -->
								<li class="media-template ui-state-default" style="display: none; width: 135px; height: 180px;">
									<input type="hidden" class="id">
									<input type="hidden" class="media_id">
									<img src="" class="preview img-responsive">
									<img src="<?php echo url('img/ico-delete.gif'); ?>" class="delete-media">
								</li>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['tel']); ?>">
							<label><small class="label bg-red">必須</small> 電話番号</label>
							<?php echo App\Helper::error($errors, ['tel']); ?>
							<div class="row">
								<div class="col-xs-6 col-sm-3">
									<?php echo Form::text('tel', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）09012345678']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, 'identification_media_id'); ?>">
							<label><small class="label bg-red">必須</small> 身分証明書</label>
							<div id="identification-uploader">
								<?php echo App\Helper::error($errors, 'identification_media_id'); ?>
								<p class="help-block">以下のうち、いずれかの画像をアップロードしてください。</p>
								<p class="help-block">免許証 / パスポート / 住基カード</p>
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
								<!--<span class="help-block text-red">※画像は 600 x 800 で作成してください。</span>-->
								
								<!-- 写真テンプレート -->
								<li class="media-template ui-state-default" style="display: none; width: 135px; height: 180px;">
									<input type="hidden" class="id">
									<input type="hidden" class="media_id">
									<img src="" class="preview img-responsive">
									<img src="<?php echo url('img/ico-delete.gif'); ?>" class="delete-media">
								</li>

							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['corporation']); ?>">
							<label><small class="label bg-red">必須</small> 個人・法人</label>
							<?php echo App\Helper::error($errors, ['corporation']); ?>
							<p class="help-block">個人か法人のどちらかを選択してください。</p>
							<div class="row radio">
								<div class="col-md-3 col-xs-6"><label><?php echo Form::radio('corporation', 1, true, []); ?> 個人</label></div>
								<div class="col-md-3 col-xs-6"><label><?php echo Form::radio('corporation', 2, false, []); ?> 法人</label></div>
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
@stop

@section('script')
<script>
$(function() {
	
	//プロフィール画像
	var profileMediaList = <?php echo App\Media::jsonSingle($host->profile_media_id); ?>;
	var profileMedia = new Media({
		baseName: 'profile_media_id',
		mediaList: profileMediaList,
		uploader: 'profile-uploader',
		multiple: false
	});
	
	//身分証明書画像
	var identificationMediaList = <?php echo App\Media::jsonSingle($host->identification_media_id); ?>;
	var identificationMedia = new Media({
		baseName: 'identification_media_id',
		mediaList: identificationMediaList,
		uploader: 'identification-uploader',
		multiple: false
	});
	
});
</script>
@stop
