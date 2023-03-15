@extends('layouts/main')

@section('content')
<div class="card" style="width:25rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$book->title}}</h3>
    <!-- ТУТ КАРТИНКУ КНИГИ БЫ КУДА-НИБУДЬ -->
    <h5 class="card-title">Автор - <a href="{{route('author.show', $author->id)}}">{{$author->fullname}}</a></h5>
    <!-- ТУТ КАРТИНКУ АВТОРА БЫ -->
    <h5 class="card-title">Жанр - <a href="{{route('genre.show', $genre->id)}}">{{$genre->title}}</a></h5>
    <form action="{{route('book.delete', $book->id)}}" method="POST">
        <a href="{{route('book.index')}}" class="btn btn-primary">Вернуться</a>
        <a class="btn btn-primary" href="{{route('book.edit', $book->id)}}">Редактировать</a>
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
  </div>
</div>
@endsection