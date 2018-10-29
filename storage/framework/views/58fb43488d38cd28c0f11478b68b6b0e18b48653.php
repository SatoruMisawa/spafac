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
			<?php echo Form::model($plan, array('action' => array('Host\PlanController@confirm', $space->id, $plan->id))); ?>
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">プラン</h3>
						<div class="pull-right box-tools">
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['name']); ?>">
							<label><small class="label bg-red">必須</small> プランの名称</label>
							<?php echo App\Helper::error($errors, ['name']); ?>
							<div class="row">
								<div class="col-xs-12">
									<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'プランの名称']); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group">
							<label><small class="label bg-red">必須</small> 価格</label>
							<table class="table">
								<tr>
									<td>
										<div class="form-group <?php echo App\Helper::errorClass($errors, ['charge_per_hour']); ?>">
											<?php echo App\Helper::error($errors, ['charge_per_hour']); ?>
											<div class="row">
												<label class="col-sm-2 form-control-static">時間価格</label>
												<div class="col-sm-2 col-sm-offset-1">
													<label class="form-control-static"><?php echo Form::checkbox('by_hour', 1, null, ['class' => '']); ?> 有効</label>
												</div>
												<div class="col-sm-3 col-sm-offset-4">
													<div class="input-group">
														<?php echo Form::text('charge_per_hour', null, ['class' => 'form-control', 'placeholder' => '']); ?>
														<span class="input-group-addon">円&nbsp;/&nbsp;時間</span>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group <?php echo App\Helper::errorClass($errors, ['charge_per_day']); ?>">
											<?php echo App\Helper::error($errors, ['charge_per_day']); ?>
											<div class="row">
												<label class="col-sm-2 form-control-static">一日価格</label>
												<div class="col-sm-2 col-sm-offset-1">
													<label class="form-control-static"><?php echo Form::checkbox('by_day', 1, null, ['class' => '']); ?> 有効</label>
												</div>
												<div class="col-sm-3 col-sm-offset-4">
													<div class="input-group">
														<?php echo Form::text('charge_per_day', null, ['class' => 'form-control', 'placeholder' => '']); ?>
														<span class="input-group-addon">円&nbsp;/&nbsp;日</span>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="box-body pad">
						<div class="form-group">
							<label><small class="label bg-red">必須</small> 貸出可能な曜日・時間帯</label>
							<table class="table">
								<?php foreach (App\PlanDay::$dayOfWeekList as $index => $name) : ?>
									<?php $planDayData = isset($planDayList[$index]) ? $planDayList[$index] : null; ?>
									<tr>
										<td>
											<div class="form-group <?php echo App\Helper::errorClass($errors, ['planDayList.' . $index . '.hour_from', 'planDayList.' . $index . '.hour_to']); ?>">
												<?php echo App\Helper::error($errors, ['planDayList.' . $index . '.hour_from', 'planDayList.' . $index . '.hour_to']); ?>
												<div class="row">
													<label class="col-sm-2 form-control-static"><?php echo e($name); ?></label>
													<input type="hidden" name="planDayList[<?php echo $index; ?>][day_of_week]" value="<?php echo $index; ?>">
													<div class="col-sm-2 col-sm-offset-1">
														<label class="form-control-static"><?php echo Form::checkbox('planDayList[' . $index . '][available]', 1, !empty($planDayData['available']), ['class' => '']); ?> 有効</label>
													</div>
													<div class="col-sm-3">
														<div class="input-group">
															<?php echo Form::select('planDayList[' . $index . '][hour_from]', App\PlanDay::$hourList, $planDayData['hour_from'], ['class' => 'form-control', 'placeholder' => '']); ?>
															<span class="input-group-addon">:00</span>
														</div>
													</div>
													<div class="col-sm-1">
														<label class="form-control-static">～</label>
													</div>
													<div class="col-sm-3">
														<div class="input-group">
															<?php echo Form::select('planDayList[' . $index . '][hour_to]', App\PlanDay::$hourList, $planDayData['hour_to'], ['class' => 'form-control', 'placeholder' => '']); ?>
															<span class="input-group-addon">:00</span>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group <?php echo App\Helper::errorClass($errors, ['approve_reservation']); ?>">
							<label><small class="label bg-red">必須</small> 予約の承認方法</label>
							<?php echo App\Helper::error($errors, ['approve_reservation']); ?>
							<div class="row radio">
								<div class="col-sm-6">
									<label><?php echo Form::radio('approve_reservation', 0, null, []); ?> 承認なし/今すぐ予約</label>
								</div>
								<div class="col-sm-6">
									<label><?php echo Form::radio('approve_reservation', 1, null, []); ?> 承認あり</label>
								</div>
							</div>
						</div>
					</div>
					<div class="box-body pad">
						<div class="form-group">
							<label><small class="label bg-blue">任意</small> 貸出可能な期間</label>
							<div class="row">
								<div class="col-sm-4">
									<?php echo Form::text('period_from', null, ['class' => 'form-control datepicker', 'placeholder' => '']); ?>
								</div>
								<div class="col-sm-1">
									～
								</div>
								<div class="col-sm-4">
									<?php echo Form::text('period_to', null, ['class' => 'form-control datepicker', 'placeholder' => '']); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>