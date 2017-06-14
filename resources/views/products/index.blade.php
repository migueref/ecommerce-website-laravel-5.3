@extends("layouts.app")
@section("content")
  <div class="big-padding text-center blue-grey white-text">
    <h1>Products</h1>

  </div>
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Price</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
           @foreach ($products as $product)

            <tr>

              <td><a href="{{url('/products/'.$product->id)}}">{{$product->id}}</a></td>
              <td><a href="{{url('/products/'.$product->id)}}">{{$product->title}}</a></td>
              <td><a href="{{url('/products/'.$product->id)}}">{{$product->description}}</a></td>
              <td><a href="{{url('/products/'.$product->id)}}">{{$product->pricing}}</a></td>
              <td>
                <a href="{{url('/products/'.$product->id.'/edit')}}"><i class="material-icons">create</i></a>
                @include('products.delete',['product'=>$product])
              </td>

            </tr>

           @endforeach
           <tr>

           </tr>
        </tbody>
      </table>
    </div>
    <div class="floating">
      <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
        <i class="material-icons">add</i>
      </a>
    </div>

@endsection
