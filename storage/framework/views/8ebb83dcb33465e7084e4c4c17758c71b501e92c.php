
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		スペースオーナー管理画面
		<small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo url('host'); ?>"><i class="fa fa-dashboard"></i> ホーム</a></li>
	</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
	<?php echo $__env->make('host.layouts.message', array('errors' => $errors), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="alert alert-dismissible">
		
ただ今、サイトオープン準備期間につき仮登録として、必須項目の登録のみとさせていただいております。<br>
サイト準備が整いましたら、ご登録いただいたアドレスへ随時登録作業お知らせ致します。<br>
今しばらくお待ちください。<br>
<br>
ご不明な点はinfo@spafac.comまで、お問い合わせください。<br>

	</div>

</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('host.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>