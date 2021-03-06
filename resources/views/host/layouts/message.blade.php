<?php $message = Session::get('message'); ?>
<?php if (strlen($message)) : ?>
	<div class="alert alert-info alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i> 情報</h4>
		<?php echo e($message); ?>
	</div>
<?php endif; ?>
<?php if ($errors && $errors->count() > 0) : ?>
	<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-warning"></i> 入力に誤りがあります</h4>
	</div>
<?php endif; ?>
