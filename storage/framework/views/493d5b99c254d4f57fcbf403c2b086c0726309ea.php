

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/assets/css/mypage/profile.css">
<div id="mypage_contents">
	<div class="inner">
			<?php echo $__env->make('mypage.profile.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="right_contents">
			<div class="form">
				<?php echo Form::model($user, array('id' => 'form', 'action' => array('Mypage\ProfileController@confirmPassword'))); ?>
					<table>
						<tr>
							<td><span class="any">任意</span><span class="item">パスワードの変更</span><span class="lower">パスワードを変更できます。現在のパスワードと新しいパスワードを入力してください。</span></td>
						</tr>
					</table>
					<table class="pass">
						<tr>
							<td>現在のパスワード</td>
							<td>
								<?php echo Form::password('old_password', ['maxlength' => '20']); ?>
								<?php echo App\Helper::error($errors, ['old_password']); ?>
							</td>
						</tr>
						<tr>
							<td>新しいパスワード</td>
							<td>
								<?php echo Form::password('new_password', ['maxlength' => '20']); ?>
								<?php echo App\Helper::error($errors, ['new_password']); ?>
							</td>
						</tr>
						<tr>
							<td>新しいパスワード（確認）</td>
							<td>
								<?php echo Form::password('new_password_confirmation', ['maxlength' => '20']); ?>
								<?php echo App\Helper::error($errors, ['new_password_confirmation']); ?>
							</td>
						</tr>
					</table>
				<?php echo Form::close(); ?>
			</div>
		</div>
	</div>
	<div class="submit_button"><a id="submit-button" href="javascript:void(0);">保存</a></div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
$('#submit-button').on('click', function() {
	$('#form').submit();
	return false;
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mypage.layouts.master_pop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>