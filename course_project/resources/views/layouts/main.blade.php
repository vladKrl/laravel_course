<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<nav class="mb-5 bg-secondary navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">COURSE BOOK</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class='nav-item'><a class="nav-link" href="{{route('personal.main.index')}}">Вход</a></li>
        <li class='nav-item'><a class="nav-link" href="{{route('register')}}">Регистрация</a></li>
      </ul>
    </div>
  </div>
</nav>  


  <div class='container'>
      <div class='row'>
        <!-- <hr class="dropdown-divider"> -->
        @yield('content')
      </div>
  </div>
</body>
</html>
