<?php $__env->startSection("content"); ?>
  <div class="container white">
    <h1><?php echo e($total); ?></h1>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>