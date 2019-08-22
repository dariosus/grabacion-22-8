@extends("layout")

@section("title")
  Product: {{$product->name}}
@endsection

@section("main")
  <div class="jumbotron">
    <h1>{{$product->name}}</h1>
  </div>
  <div class="">
    <ul>
      <li>Price: ${{$product->price}}</li>
      <li>Stock: {{$product->stock}}</li>
      <li>Category: <a href="/category/{{$product->category->id}}"> {{$product->category->name}} </a> </li>
      <li>Brand: <a href="/brand/{{$product->brand->id}}"> {{$product->brand->name}} </a> </li>
    </ul>

    @if (Auth::check())
      <form class="" action="/products/delete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <button class="btn btn-danger" type="submit" name="button">Delete</button>
      </form>

    @endif
  </div>
@endsection
