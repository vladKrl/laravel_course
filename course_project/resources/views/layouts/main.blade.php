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
    <a class="navbar-brand" href="{{route('admin.book.index')}}">COURSE BOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class='nav-item'><a class="nav-link" href="{{route('admin.author.index')}}">Авторы</a></li>
        <li class='nav-item'><a class="nav-link" href="{{route('admin.genre.index')}}">Жанры</a></li>
        <li class='nav-item'><a class="nav-link" href="{{route('admin.book.index')}}">Книги</a></li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ПОИСК НЕ РАБОТАЕТ" aria-label="Поиск">
        <button class="btn btn-outline-secondary" type="submit">Поиск</button>
      </form>
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
