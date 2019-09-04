<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("title")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    @yield("css")
    @yield("js")
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <ul class="links">
            <li><a href="/brands">Brands</a></li>
            <li><a href="/categories">Categories</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/search">Search</a></li>
            @if (Auth::check())
              <li>
                <a href="/products/add">Add a product</a>
              </li>
            @endif
          </ul>
          <ul class="auth">
            @if (Auth::check())
              <li>Hello {{Auth::user()->name}}</li>
              <li>
                <img src="/storage/{{Auth::user()->avatar}}" alt="">
              </li>
              <li>
                <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
              </li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            @else
              <li>
                <a href="/register">Register</a>
              </li>
              <li>
                <a href="/login">Login</a>
              </li>
            @endif
          </ul>
        </nav>
      </header>
      <main>
          @yield("main")
      </main>
      <footer>
        DH 2019
      </footer>
    </div>
  </body>
</html>
