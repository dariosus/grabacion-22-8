@extends("layout")

@section("title")
  Categories
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Categories</h1>
    <h2>Check our categories!</h2>
  </div>
  <div class="">
    <ul>
      @foreach($categories as $category)
        <li>
          <a href="/category/{{$category->id}}">
            {{$category->name}}
          </a>
        </li>
      @endforeach
    </ul>

    {{$categories->links()}}
  </div>
@endsection
