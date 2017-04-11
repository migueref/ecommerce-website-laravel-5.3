<!-- Form -->
    <?php echo Form::open(['url' =>'/in_shopping_carts', 'method' =>'POST','class'=>'inline-block']); ?>

       <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
       <input type="submit" name="" value="Add to cart" class="btn btn-info">
    <?php echo Form::close(); ?>

