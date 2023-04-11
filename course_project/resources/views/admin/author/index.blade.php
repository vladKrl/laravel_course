@extends('admin.layouts.main')

@section('content')
<div class="content">
  <div class="row">
    <div class="mb-3 col-11">
      <h1 class='text-center'>АВТОРЫ</h1>
    </div>
    <div class="col-1">
      <a href="{{route('admin.author.create')}}" class='btn btn-block btn-primary'>Добавить</a>
    </div>
  </div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Полное имя</th>
      <th scope="col">Страна</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Дата смерти</th>
      <th class='text-center' colspan='3' scope="col">ДЕЙСТВИЯ</th>
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($authors as $author)
    <tr>
      <td><a class="link-dark" href="{{route('admin.author.show', $author->id)}}">{{$author->fullname}}</a></td>
      <td>{{$author->birth_country}}</td>
      <td>{{$author->birthday}}</td>
      <td>{{$author->deathday}}</td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.author.show', $author->id)}}">ОТКРЫТЬ</a></td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.author.edit', $author->id)}}">ИЗМЕНИТЬ</a></td>
      <td class='text-center'>
        <form action="{{route('admin.author.delete', $author->id)}}" method="POST">
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