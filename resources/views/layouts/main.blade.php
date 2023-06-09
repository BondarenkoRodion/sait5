<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Огого які товари</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <a class="navbar-brand" href="assets/logo.png">
                <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/09/att-logo-600x600.jpg?auto=format&q=60&fit=max&w=930" alt="..." height="36">
                </a>
            <!-- <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /><use xlink:href="/assets/logo.png"></use></svg> -->
        </a>
        </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('index') }}" class="nav-link px-2 link">Головна</a></li>
        <li><a href="{{ route('product.list') }}" class="nav-link px-2">Товари</a></li>
        <li><a href="{{ route('product.index') }}" class="nav-link px-2">Списки</a></li>
      </ul>

      <div class="col-md-3 text-end nomarker d-flex center">
 
      </div>
      <!-- ---------------------------------------- -->
      <div class="col-md-2 mb-2 mb-md-0" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="col-md-3 text-end nomarker d-flex center">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}"><button type='button' class='btn btn-outline-primary me-2'>Увійти</button></a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}"><button type='button' class='btn btn-primary'>Реєстрація</button></a>
                            @endif
                        @else
                            <a href='profile.php'>
                              <button type='button' class='btn btn-primary me-2'>{{ Auth::user()->name; }}</button></a>
                              <a href="{{ route('product.index') }}"
                                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" 
                                      class='nav-link px-2 link-primary'>
                                      <button type='button' class='btn btn-outline-primary me-2'>Вийти</button></a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                  </div>
                </div>
    </header>
  </div>
  <div class="container">
          @yield('content')
  </div>
          </div>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2023 /Огого які товари, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="/about" class="nav-link px-2 text-body-secondary">Додому</a></li>
      <li class="nav-item"><a href="/view" class="nav-link px-2 text-body-secondary">Таблиці</a></li>
      <li class="nav-item"><a href="/add" class="nav-link px-2 text-body-secondary">Додати</a></li>
      <li class="nav-item"><a href="/delete" class="nav-link px-2 text-body-secondary">Видалити</a></li>
    </ul>
  </footer>
</div>
</body>
</html>