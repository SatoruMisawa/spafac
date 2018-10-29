
<?php $__env->startSection('content'); ?>
<div id="mypage_contents">
	<div class="inner box">

		<div class="mypage">
			<div class="avatar">
            <img src="<?php echo url('assets/mypage/img/avatar.jpg'); ?>" alt=""><span><?php echo e($loginUser->name); ?></span>
            </div>
			<div class="link_box">
				<a href="<?php echo url('mypage/profile'); ?>">プロフィールを表示</a>
				<a href="<?php echo url('mypage/profile/edit-account'); ?>">プロフィールを編集</a>
			</div>
			<h2 class="mypage_title_h2">ヘルプ</h2>
			<h3 class="mypage_title_h3">予約について</h3>
			<div class="link_box">
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約の変更方法</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">予約のキャンセル方法とキャンセル料の種別について</a>
				<a href="javascript:void(0)" onclick="opener.location.href='/help/';">当日の流れ</a>
			</div>
			<h3 class="mypage_title_h3">決済について</h3>
			<div class="link_box"><a href="javascript:void(0)" onclick="opener.location.href='/help/';">決済について詳しく知りたい</a></div>
		</div>
		<div class="mypage-index-rightbox">

        
        
        <h3>やることリスト</h3>
        <ul>
            <?php if(count($todo) > 0): ?>
                <?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo_this): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <li><a href="?id=<?php echo e($todo_this['id']); ?>"><?php echo e($todo_this['title']); ?></a><span><?php echo e($todo_this['date']); ?></</span></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            	<li>現在やることリストはありません。</li>        
            <?php endif; ?>
        </ul>

        <h3>未返信のメッセージ</h3>
        <ul>
            <?php if(count($remess) > 0): ?>
                <?php $__currentLoopData = $remess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remess_this): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <li><a href="/mypage/mail-list?id=<?php echo e($remess_this['id']); ?>"><?php echo e($remess_this['title']); ?></a><span><?php echo e($remess_this['date']); ?></</span></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            	<li>未返信のメッセージはありません。</li>        
            <?php endif; ?>
        </ul>

        <h3>未完了の予約リクエスト</h3>
        <ul>
            <?php if(count($rerec) > 0): ?>
                <?php $__currentLoopData = $rerec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rerec_this): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <li><a href="?id=<?php echo e($rerec_this['id']); ?>"><?php echo e($rerec_this['title']); ?></a><span><?php echo e($rerec_this['date']); ?></</span></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
		        <li>未完了の予約リクエストはありません。</li>
		    <?php endif; ?>
        </ul>

        <h3>予約完了</h3>
        <ul>
            <?php if(count($redone) > 0): ?>
                <?php $__currentLoopData = $redone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $redone_this): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <li><a href="?id=<?php echo e($redone_this['id']); ?>"><?php echo e($redone_this['title']); ?></a><span><?php echo e($redone_this['date']); ?></</span></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
		        <li>予約はありません。</li>
		    <?php endif; ?>
        </ul>

			<p>お問い合わせは<a href="tomail:info@spafac.com">info@spafac.com</a>まで。</p>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mypage.layouts.master_pop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>