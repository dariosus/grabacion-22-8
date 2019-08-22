@extends("layout")

@section("title")
  Brands
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Brands</h1>
    <h2>Check our brands!</h2>
  </div>
  <div class="">
    <ul>
      @foreach($brands as $brand)
        <li>
          <a href="/brand/{{$brand->id}}">
            {{$brand->name}}
          </a>
        </li>
      @endforeach
    </ul>

    {{$brands->links()}}
  </div>
@endsection
