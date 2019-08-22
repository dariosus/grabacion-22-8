@extends("layout")

@section("title")
  Brand: {{$brand->name}}
@endsection

@section("main")
  <div class="jumbotron">
    <h1>{{$brand->name}}</h1>
    <h2>Check our products from brand {{$brand->name}}!</h2>
  </div>
  <div class="">
    <ul>
      @foreach($brand->products as $product)
        <li>
          <a href="/product/{{$product->id}}">
            {{$product->name}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
