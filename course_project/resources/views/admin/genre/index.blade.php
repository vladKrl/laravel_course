@extends('admin/layouts/main')

@section('content')
<div class="content">
  <div class="row">
    <div class="mb-3 col-11">
      <h1 class='text-center'>ЖАНРЫ</h1>
    </div>
    <div class="col-1">
      <a href="{{route('admin.genre.create')}}" class='btn btn-block btn-primary'>Добавить</a>
    </div>
  </div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Название</th>
      <th scope="col">Краткое описание</th>
      <th class='text-center' colspan='3' scope="col">ДЕЙСТВИЯ</th>
    </tr>
  </thead>
  <tbody>
    @foreach($genres as $genre)
    <tr>
      <td><a class="link-dark" href="{{route('admin.genre.show', $genre->id)}}">{{$genre->title}}</a></td>
      <td>{{$genre->short}}</td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.genre.show', $genre->id)}}">ОТКРЫТЬ</a></td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.genre.edit', $genre->id)}}">ИЗМЕНИТЬ</a></td>
      <td class='text-center'>
        <form action="{{route('admin.genre.delete', $genre->id)}}" method="POST">
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