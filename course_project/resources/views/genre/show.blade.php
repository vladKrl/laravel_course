@extends('layouts/main')

@section('content')
<div class="card" style="width:25rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$genre->title}}</h3>
    <h5 class="card-title">{{$genre->short}}</h5>
    <form action="{{route('genre.delete', $genre->id)}}" method="POST">
        @csrf
        @method('delete')
        <a href="{{route('genre.index')}}" class="btn btn-primary">Вернуться</a>
        <a class="btn btn-primary" href="{{route('genre.edit', $genre->id)}}">Редактировать</a>
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
  </div>
</div>
@endsection