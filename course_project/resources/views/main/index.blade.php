@extends('layouts.main')

@section('content')

<div class="content">
  <div class="row">
    <div class="mb-3 col-12">
      <h1 class='text-center'>КНИГИ</h1>
      <h4 class='text-center'>ограниченный функционал</h4>
    </div>
  </div>
</div>

@foreach($books as $book)
    <div class="card" style="width: 25rem; background-color: #eee;">
        <div class='content'>
            <div class="row d-flex justify-content-around">
                <div class="col-4"><img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..."></div>
                <div class="col-4"><img src="{{ asset('storage/' . $book->author->image) }}" class="card-img-top" alt="..."></div>
            </div>
        </div>
        
        <div class="card-body mr-3">
            <h3 class="card-title">{{$book->title}}</h3>
            <h4 class="card-title">Автор - {{$book->author->fullname}}</h4>
            <h4 class="card-title">Жанр - {{$book->genre->title}}</h4>
            <h6 class="card-title">{{$book->short}}</h6>
        </div>
    </div>
    @endforeach


@endsection
