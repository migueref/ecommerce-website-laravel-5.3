<?php $__env->startSection("content"); ?>
  <div class="big-padding text-center blue-grey white-text">
    <h1>Shopping cart</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Product</td>
          <td>Price</td>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <tr>
            <td><?php echo e($product->title); ?></td>
            <td><?php echo e($product->pricing); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <tr>
          <td>Total</td>
          <td><?php echo e($total); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>