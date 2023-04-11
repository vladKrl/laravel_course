@extends('personal.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($books->count() != 0)
        @foreach($books as $book)
        <div class="col-md-3 d-flex">
            <div class="card">
                <div class="card-header text-center"><h2>{{$book->title}}</h2></div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <img class='rounded mx-auto d-block' width='250px' src="{{ asset('storage/' . $book->image) }}" alt="...">
                    <h4 class="card-title">Автор - <a class="link-dark" href="{{route('personal.author.index')}}">{{$book->author->fullname}}</a></h4>
                    <h4 class="card-title">Жанр - <a class="link-dark" href="{{route('personal.genre.index')}}">{{$book->genre->title}}</a></h4>
                    <h6 class="card-title">{{mb_strimwidth($book->short, 0, 200, '...')}}</h6>
                    <form action="{{route('personal.liked.delete', $book->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-outline-danger' type='submit'>УБРАТЬ ИЗ ИЗБРАННОГО</button>
                    </form>
                </div>
            </div>
        </div>
@endforeach
        @else
        <div class="col-md-3">
            <div class="card" style='height:170px;'>
                <div class="card-header text-center"><h2>Нет книг в избранном</h2></div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <a class='btn btn-primary' href="{{route('personal.main.index')}}">Добавить</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
