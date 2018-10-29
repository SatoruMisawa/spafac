<?php if($paginator->hasPages()): ?>
	<ul class="pager">
		
		<?php if(false): ?>
			<?php if($paginator->currentPage() == 1): ?>
				<li><a href="<?php echo e($paginator->url(1)); ?>" class="prev disabled btn">≪最初へ</a></li>
			<?php else: ?>
				<li><a href="<?php echo e($paginator->url(1)); ?>" class="prev btn">≪最初へ</a></li>
			<?php endif; ?>
		<?php endif; ?>
		
		
		<?php if($paginator->onFirstPage()): ?>
		<?php else: ?>
			<li><a href="<?php echo e($paginator->previousPageUrl()); ?>">&lt;</a></li>
		<?php endif; ?>

		
		<?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<?php if(is_string($element)): ?>
				<li class="disabled sp-hide"><span><?php echo e($element); ?></span></li>
			<?php endif; ?>

			
			<?php if(is_array($element)): ?>
				<?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($page == $paginator->currentPage()): ?>
						<li class="active"><a><?php echo e($page); ?></a></li>
					<?php else: ?>
						<li class=""><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		
		<?php if($paginator->hasMorePages()): ?>
			<li><a href="<?php echo e($paginator->nextPageUrl()); ?>">&gt;</a></li>
		<?php else: ?>
		<?php endif; ?>
		
		<?php if(false): ?>
			<?php if($paginator->currentPage() != $paginator->lastPage()): ?>
				<li><a href="<?php echo e($paginator->url($paginator->lastPage())); ?>" class="prev btn">最後へ≫</a></li>
			<?php else: ?>
				<li><a href="<?php echo e($paginator->url($paginator->lastPage())); ?>" class="prev disabled btn">最後へ≫</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
