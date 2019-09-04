@extends("layout")

@section("title")
  Search
@endsection

@section("js")
  <script src="/js/search.js" charset="utf-8"></script>
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Search for products</h1>
    <input type="text" class="search" name="" value="">
    <p>Please type at least 3 characters</p>
  </div>
  <div class="results">
    <ul>

    </ul>

  </div>
@endsection
