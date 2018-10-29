<?php $message = Session::get('message'); ?>
<?php if (strlen($message)) : ?>
	<script>
	$(function() {
		var msg = '<?php echo e($message); ?>';
		alert(msg);
	});
	</script>
<?php endif; ?>
<?php if ($errors && $errors->count() > 0) : ?>
	<script>
	$(function() {
		var msg = '入力に誤りがあります。';
		alert(msg);
	});
	</script>
<?php endif; ?>
