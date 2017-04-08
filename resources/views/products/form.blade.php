    <!-- Form -->
    {!!Form::open(['url' => $url, 'method' => $method]) !!}
      <div class="form-group">
        {{ Form::text('title',$product->title,['class' => 'form-control', 'placeholder'=>'Product title'])}}
      </div>
      <div class="form-group">
        {{ Form::number('pricing',$product->pricing,['class' => 'form-control', 'placeholder'=>'Price (USD)'])}}
      </div>
      <div class="form-group">
        {{ Form::textarea('description',$product->description,['class' => 'form-control', 'placeholder'=>'Describe your product '])}}
      </div>
      <div class="form-group text-right">
        <a href="{{url('/products')}}">Back to products</a>
        <input type="submit" name="" value="Save" class="btn btn-success">
      </div>
    {!! Form::close() !!}
