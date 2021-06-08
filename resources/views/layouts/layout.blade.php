<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon-1.jpg') }}" type="image/x-icon">  

    <title>Verbena</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark" style="width: 100%">
        <a class="navbar-brand" href="{{ route('homepage') }}">
          <i class="fas fa-spa"></i>
        </a>
        <button class="navbar-toggler mobile-menu" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars mobile-menu-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('store') }}">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            @if (auth()->user())
              @if (auth()->user()->type === 'admin' || auth()->user()->type === 'editor')
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
              @endif
            @endif
          </ul>
          <div class="buttons">
            @if ( auth()->user() )
              <a href="{{ route('user') }}">
                <button id="user" type="button" class="btn ml-1">
                  {{ auth()->user()->username }}
                </button>
              </a>

              <form class="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn ml-1">Logout</button>
              </form>
            @else
              <a href="{{ route('login') }}">
                <button type="button" class="btn ml-1">Login</button>
              </a>
              <a href="{{ route('register') }}">
                <button id="ok" type="button" class="btn ok">Register</button>
              </a>
            @endif
          </div>
        </div>
      </nav>
    </header>

    
      @yield('content')


      <div class="to-top">
        <a href="#top">
          <i class="fas fa-arrow-circle-up"></i>
        </a>
      </div>
    <footer class="footer-about text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
          © 2021 Copyright:
          <a class="text-dark" href="#">Verbena.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>