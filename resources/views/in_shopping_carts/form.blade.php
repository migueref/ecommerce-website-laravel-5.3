<!-- Form -->
    {!! Form::open(['url' =>'/in_shopping_carts', 'method' =>'POST','class'=>'inline-block']) !!}
       <input type="hidden" name="product_id" value="{{$product->id}}">
       <input type="submit" name="" value="Add to cart" class="btn btn-info">
    {!! Form::close() !!}
