@extends('admin/layouts/main')

@section('content')
<div class="content">
  <div class="row">
    <div class="mb-3 col-11">
      <h1 class='text-center'>КНИГИ</h1>
    </div>
    <div class="col-1">
      <a href="{{route('admin.book.create')}}" class='btn btn-block btn-primary'>Добавить</a>
    </div>
  </div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Название</th>
      <th scope="col">Краткое описание</th>
      <th scope="col">Автор</th>
      <th scope="col">Жанр</th>
      <th class='text-center' colspan='3' scope="col">ДЕЙСТВИЯ</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <td><a class="link-dark" href="{{route('admin.book.show', $book->id)}}">{{$book->title}}</a></td>
      <td  class='w-50'>{{$book->short}}</td>
      <td><a class="link-dark" href="{{route('admin.author.show', $book->author_id)}}">{{$book->author->fullname}}</a></td>
      <td><a class="link-dark" href="{{route('admin.genre.show', $book->genre_id)}}">{{$book->genre->title}}</a></td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.book.show', $book->id)}}">ОТКРЫТЬ</a></td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.book.edit', $book->id)}}">ИЗМЕНИТЬ</a></td>
      <td class='text-center'>
        <form action="{{route('admin.book.delete', $book->id)}}" method="POST">
          @csrf
          @method('delete')
          <button type='submit' class='btn btn-danger'>УДАЛИТЬ</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
