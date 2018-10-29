<p>検索結果<?php echo e($paginate->total()); ?>件中　<?php echo e($paginate->firstItem()); ?>～<?php echo e($paginate->lastItem()); ?>件を表示</p>
<?php echo $paginate->links('vendor.pagination.default'); ?>
