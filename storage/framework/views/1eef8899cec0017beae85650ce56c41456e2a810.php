<?php $__env->startSection("content"); ?>
  <div class="container white">
    <h1>New product</h1>
    <!-- Form -->
    <?php echo Form::open(['url' => '/products', 'method' => 'POST']); ?>

      <div class="form-group">
        <?php echo e(Form::text('title','',['class' => 'form-control', 'placeholder'=>'Product title'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::number('pricing','',['class' => 'form-control', 'placeholder'=>'Price (USD)'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::textarea('description','',['class' => 'form-control', 'placeholder'=>'Describe your product '])); ?>

      </div>
      <div class="form-group text-right">
        <a href="<?php echo e(url('/products')); ?>">Back to products</a>
        <input type="submit" name="" value="Save" class="btn btn-success">
      </div>
    <?php echo Form::close(); ?>


  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>