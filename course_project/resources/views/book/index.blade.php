@extends('layouts/main')

@section('content')
<h1 class='text-center mb-3'>КНИГИ</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Название</th>
      <th scope="col">Краткое описание</th>
      <th scope="col">Автор</th>
      <th scope="col">Жанр</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <td><a class="link-dark" href="{{route('book.show', $book->id)}}">{{$book->title}}</a></td>
      <td  class='w-50'>{{$book->short}}</td>
      <td><a class="link-dark" href="{{route('author.show', $book->author_id)}}">{{$book->author->fullname}}</a></td>
      <td><a class="link-dark" href="{{route('genre.show', $book->genre_id)}}">{{$book->genre->title}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif