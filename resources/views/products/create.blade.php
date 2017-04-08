@extends("layouts.app")
@section("content")
  <div class="container white">
    <h1>New product</h1>
    <!-- Form -->
    {!!Form::open(['url' => '/products', 'method' => 'POST']) !!}
      <div class="form-group">
        {{ Form::text('title','',['class' => 'form-control', 'placeholder'=>'Product title'])}}
      </div>
      <div class="form-group">
        {{ Form::number('pricing','',['class' => 'form-control', 'placeholder'=>'Price (USD)'])}}
      </div>
      <div class="form-group">
        {{ Form::textarea('description','',['class' => 'form-control', 'placeholder'=>'Describe your product '])}}
      </div>
      <div class="form-group text-right">
        <a href="{{url('/products')}}">Back to products</a>
        <input type="submit" name="" value="Save" class="btn btn-success">
      </div>
    {!! Form::close() !!}

  </div>

@endsection
