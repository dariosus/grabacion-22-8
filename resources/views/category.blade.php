@extends("layout")

@section("title")
  Category: {{$category->name}}
@endsection

@section("main")
  <div class="jumbotron">
    <h1>{{$category->name}}</h1>
    <h2>Check our products from category {{$category->name}}!</h2>
  </div>
  <div class="">
    <ul>
      @foreach($category->products as $product)
        <li>
          <a href="/product/{{$product->id}}">
            {{$product->name}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
