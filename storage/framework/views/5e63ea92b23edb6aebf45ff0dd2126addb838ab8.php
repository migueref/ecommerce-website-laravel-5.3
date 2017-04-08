    <!-- Form -->
    <?php echo Form::open(['url' => $url, 'method' => $method]); ?>

      <div class="form-group">
        <?php echo e(Form::text('title',$product->title,['class' => 'form-control', 'placeholder'=>'Product title'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::number('pricing',$product->pricing,['class' => 'form-control', 'placeholder'=>'Price (USD)'])); ?>

      </div>
      <div class="form-group">
        <?php echo e(Form::textarea('description',$product->description,['class' => 'form-control', 'placeholder'=>'Describe your product '])); ?>

      </div>
      <div class="form-group text-right">
        <a href="<?php echo e(url('/products')); ?>">Back to products</a>
        <input type="submit" name="" value="Save" class="btn btn-success">
      </div>
    <?php echo Form::close(); ?>

