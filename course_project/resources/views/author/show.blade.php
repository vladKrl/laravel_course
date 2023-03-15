@extends('layouts/main')

@section('content')
<div class="card" style="width:25rem;">
  <img src="{{ asset('storage/' . $author->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$author->fullname}}</h3>
    <h5 class="card-title">Страна рождения - {{$author->birth_country}}</h5>
    <h5 class="card-title">Дата рождения - {{$author->birthday}}</h5>
    @if ($author->deathday)
    <h5 class="card-title">Дата смерти - {{$author->deathday}}</h5>
    @endif
    <form action="{{route('author.delete', $author->id)}}" method="POST">
        <a href="{{route('author.index')}}" class="btn btn-primary">Вернуться</a>
        <a class="btn btn-primary" href="{{route('author.edit', $author->id)}}">Редактировать</a>
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
  </div>
</div>
@endsection