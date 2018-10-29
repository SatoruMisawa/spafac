こんにちは、<?php echo e($user->name); ?>さん

以下のリンクをクリックして、メールアドレスの認証を行なってください。
<?php echo e(url('registration/verify/'.$user->email_token)); ?>


心当たりがない場合は、なにもせずにこのメールを削除してください。
よろしくお願いします。

<?php echo e(url('/')); ?>

<?php echo e(config('app.name')); ?> All rights reserved.
