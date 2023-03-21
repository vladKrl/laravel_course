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
    <form action="{{route('admin.author.delete', $author->id)}}" method="POST">
      @csrf
      @method('delete')    
      <a href="{{route('admin.author.index')}}" class="btn btn-primary">Вернуться</a>
      <a class="btn btn-primary" href="{{route('admin.author.edit', $author->id)}}">Редактировать</a>
      <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
    
  </div>
</div>

<div class="card" style="width:25rem;">
  <div style="background-color: #eee" class="card-body container">
    @if(count($books) != 0)
    <h2>Книги писателя</h2>
      @foreach($books as $book)
      <!-- <div class=''> -->
      <div class="row mb-2">
         <div class="col-8 pt-5">
           <a class="link-dark" href="{{route('admin.book.show', $book->id)}}"><h3>{{$book->title}}</h3></a>
          </div>
        <div class="col-4"><img width='100px' height='100px' src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..."></div>
      </div>
      @endforeach
    <div class="w-50"><a class="btn btn-primary" href="{{route('admin.book.create')}}">Добавить</a></div>
    @else
    <div class="row">
      <div class="col-9">
        <h2>Книг не найдено</h2>
      </div>
      <div class="col-3"><a class="btn btn-primary" href="{{route('admin.book.create')}}">Добавить</a></div>
    </div>
    @endif
  </div>
</div>

@endsection