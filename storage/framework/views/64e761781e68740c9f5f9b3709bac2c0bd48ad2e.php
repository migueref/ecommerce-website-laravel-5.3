<!-- Form -->
<?php echo Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']); ?>

  <button type="submit" class="btn btn-link red-text no-padding no-margin no-transform" name="" ><i class="material-icons">delete</i></button>


<?php echo Form::close(); ?>

