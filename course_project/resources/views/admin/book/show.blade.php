@extends('admin.layouts.main')

@section('content')
<div class="card" style="width:25rem;">
  <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$book->title}}</h3>
    <!-- ТУТ КАРТИНКУ КНИГИ БЫ КУДА-НИБУДЬ -->
    <h4 class="card-title">Автор - <a class="link-dark" href="{{route('admin.author.show', $author->id)}}">{{$author->fullname}}</a></h4>
    <!-- ТУТ КАРТИНКУ АВТОРА БЫ -->
    <h4 class="card-title">Жанр - <a class="link-dark" href="{{route('admin.genre.show', $genre->id)}}">{{$genre->title}}</a></h4>
    <h6 class="card-title">{{$book->short}}</h6>
    <form action="{{route('admin.book.delete', $book->id)}}" method="POST">
        <a href="{{route('admin.book.index')}}" class="btn btn-primary">Вернуться</a>
        <a class="btn btn-primary" href="{{route('admin.book.edit', $book->id)}}">Редактировать</a>
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
  </div>
</div>

@endsection