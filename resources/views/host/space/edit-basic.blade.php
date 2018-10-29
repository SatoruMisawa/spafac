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
			<?php echo Form::model($space, array('action' => array('Host\SpaceController@confirmBasic', $space->id))); ?>
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">基本情報</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['purpose_id']); ?>">
							<label><small class="label bg-red">必須</small> 使用可能用途</label>
							<p class="help-block">このスペースをどのような目的に使ってよいか選択してください。複数選択可能。</p>
							<?php echo App\Helper::error($errors, ['purpose_id']); ?>
							<div class="row checkbox">
								<?php foreach ($purposes as $purpose) : ?>
									<?php $checked = isset($spacePurposeList[$purpose->id]); ?>
									<div class="col-md-4 col-sm-6">
										<label><?php echo Form::checkbox('spacePurposeList[' . $purpose->id . ']', 1, $checked, []); ?> <?php echo e($purpose->name); ?></label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['capacity']); ?>">
							<label><small class="label bg-red">必須</small> 最大収容人数</label>
							<?php echo App\Helper::error($errors, ['capacity']); ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										<?php echo Form::text('capacity', null, ['class' => 'form-control', 'placeholder' => '100']); ?>
										<span class="input-group-addon">人</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['floor_space']); ?>">
							<label><small class="label bg-red">必須</small> 床面積</label>
							<?php echo App\Helper::error($errors, ['floor_space']); ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										<?php echo Form::text('floor_space', null, ['class' => 'form-control', 'placeholder' => '100']); ?>
										<span class="input-group-addon">㎡</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['key_delivery_id']); ?>">
							<label><small class="label bg-red">必須</small> 鍵の受け渡し</label>
							<p class="help-block">利用日当日の鍵の受け渡し方法を選択してください。</p>
							<?php echo App\Helper::error($errors, ['key_delivery_id']); ?>
							<div class="row radio">
								<?php foreach ($keyDeliveries as $keyDelivery) : ?>
									<div class="col-md-4 col-sm-6">
										<label><?php echo Form::radio('key_delivery_id', $keyDelivery->id, null, []); ?> <?php echo e($keyDelivery->name); ?></label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['reservation_deadline']); ?>">
							<label><small class="label bg-red">必須</small> 予約の締切</label>
							<p class="help-block">利用日の何日前に予約を締め切るかを設定してください。</p>
							<p class="help-block">例）「利用日の7日前」に設定→ゲストが4月8日に利用したい場合、4月1日以前に予約をする必要があります。</p>
							<?php echo App\Helper::error($errors, ['reservation_deadline']); ?>
							<div class="row">
								<div class="col-sm-6">
									<?php echo Form::select('reservation_deadline', [null => '選択してください'] + App\Space::$reservationDeadlines, null, ['class' => 'form-control']); ?>
								</div>
							</div>
						</div>
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['reservation_acceptance']); ?>">
							<label><small class="label bg-red">必須</small> 予約の受付期間</label>
							<p class="help-block">ゲストが予約リクエストする日を起点として、利用日が何ヶ月先までの予約を受け付けるか設定してください。</p>
							<p class="help-block">例）「12ヶ月先まで予約を受け付ける」を設定→2018年4月1日の場合、2019年4月1日まで予約を受け付けます。</p>
							<?php echo App\Helper::error($errors, ['reservation_acceptance']); ?>
							<div class="row">
								<div class="col-sm-6">
									<?php echo Form::select('reservation_acceptance', [null => '選択してください'] + App\Space::$reservationAcceptances, null, ['class' => 'form-control']); ?>
								</div>
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