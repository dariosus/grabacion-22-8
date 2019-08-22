@extends("layout")

@section("title")
  Products
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Products</h1>
    <h2>Check our products!</h2>
  </div>
  <div class="">
    <ul>
      @foreach($products as $product)
        <li>
          <a href="/product/{{$product->id}}">
            {{$product->name}}
          </a>
        </li>
      @endforeach
    </ul>

    {{$products->links()}}
  </div>
@endsection
