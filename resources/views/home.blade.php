@extends("layout")

@section("title")
  Home
@endsection

@section("js")
  <script src="/js/home.js" charset="utf-8"></script>
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Welcome!</h1>
    <div class="gif">
      <img src="" alt="">
    </div>

    <a href="/products"><button style="margin-top:10px;" class="btn btn-primary" type="button" name="button">Products</button></a>
  </div>
@endsection
