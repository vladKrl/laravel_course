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
    <a class="navbar-brand" href="{{route('book.index')}}">COURSE BOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class='nav-item'><a class="nav-link" href="{{route('author.index')}}">Авторы</a></li>
        <li class='nav-item'><a class="nav-link" href="{{route('genre.index')}}">Жанры</a></li>
        <li class='nav-item'><a class="nav-link" href="{{route('book.index')}}">Книги</a></li>

        <li class="nav-item dropdown">
          <a class="btn btn-dark text-info nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Добавить
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{route('genre.create')}}" class="dropdown-item">Добавить жанр</a></li>
            <li><a href="{{route('author.create')}}" class="dropdown-item">Добавить писателя</a></li>
            <li><a href="{{route('book.create')}}" class="dropdown-item">Добавить книгу</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li> -->
          </ul>
        </li>
      
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Отключенная</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ПОИСК НЕ РАБОТАЕТ" aria-label="Поиск">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
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
