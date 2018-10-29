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
			<?php echo Form::model($facility, array('action' => array('Host\FacilityController@confirm'))); ?>
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">施設情報</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
						<div class="box-body pad">
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['zip']); ?>">
								<label><small class="label bg-red">必須</small> 郵便番号</label>
								<p class="help-block">ハイフンなしの半角数字。入力すると住所が自動補完されます。</p>
								<?php echo App\Helper::error($errors, ['zip']); ?>
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										<?php echo Form::text('zip', null, ['class' => 'form-control', 'maxlength' => '7', 'placeholder' => '例）1600023']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['prefecture_id']); ?>">
								<label><small class="label bg-red">必須</small> 都道府県</label>
								<?php echo App\Helper::error($errors, ['prefecture_id']); ?>
								<div class="row">
									<div class="col-sm-6">
										<?php echo Form::select('prefecture_id', ['' => '選択してください'] + $prefectureList, null, ['class' => 'form-control']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['address1', 'address1_kana']); ?>">
								<label><small class="label bg-red">必須</small> 市区町村</label>
								<?php echo App\Helper::error($errors, ['address1', 'address1_kana']); ?>
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address1', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）新宿区']); ?>
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address1_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）シンジュクク']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['address2', 'address2_kana']); ?>">
								<label><small class="label bg-red">必須</small> 町名・番地</label>
								<?php echo App\Helper::error($errors, ['address2', 'address2_kana']); ?>
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address2', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）西新宿6丁目15-1']); ?>
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address2_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ニシシンジュク6チョウメ15-1']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['address3', 'address3_kana']); ?>">
								<label><small class="label bg-blue">任意</small> ビル名・部屋番号</label>
								<?php echo App\Helper::error($errors, ['address3', 'address3_kana']); ?>
								<p class="help-block">漢字</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address3', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ラ・トゥール新宿608号室']); ?>
									</div>
								</div>
								<p class="help-block">フリガナ</p>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::text('address3_kana', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）ラトゥールシンジュク608ゴウシツ']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['address2', 'address2_kana']); ?>">
								<label><small class="label bg-red">必須</small> 地図の設定</label>
								<?php echo App\Helper::error($errors, ['']); ?>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['access']); ?>">
								<label><small class="label bg-red">必須</small> アクセス</label>
								<p class="help-block">最寄り駅からの歩き方や所要時間、高速道路の出口などを入力してください。</p>
								<?php echo App\Helper::error($errors, ['access']); ?>
								<div class="row">
									<div class="col-sm-9">
										<?php echo Form::textarea('access', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => '例）JR新宿西口より徒歩7分']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['tel']); ?>">
								<label><small class="label bg-red">必須</small> 電話番号</label>
								<p class="help-block">この情報は予約が確定次第ゲストに送信される利用日程表で開示されます。</p>
								<?php echo App\Helper::error($errors, ['tel']); ?>
								<div class="row">
									<div class="col-xs-6 col-sm-3">
										<?php echo Form::text('tel', null, ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => '例）09012345678']); ?>
									</div>
								</div>
							</div>
							<div class="form-group <?php echo App\Helper::errorClass($errors, ['facility_kind_id']); ?>">
								<label><small class="label bg-red">必須</small> 施設の種類</label>
								<?php echo App\Helper::error($errors, ['facility_kind_id']); ?>
								<div class="row radio">
									<?php foreach ($facilityKinds as $facilityKind) : ?>
										<div class="col-md-3 col-xs-6"><label><?php echo Form::radio('facility_kind_id', $facilityKind->id, true, []); ?> <?php echo e($facilityKind->name); ?></label></div>
									<?php endforeach; ?>
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
@stop