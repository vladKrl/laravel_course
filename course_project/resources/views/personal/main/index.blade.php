@extends('personal.layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
@foreach($books as $book)
        <div class="col-md-3 d-flex">
            <div class="card pb-2">
                <div class="card-header text-center"><a class="link-dark" href="{{route('personal.book.show', $book->id)}}"><h2>{{$book->title}}</h2></a></div>
                <div class="card-body">
                    <img class='rounded mx-auto d-block' width='250px' src="{{ asset('storage/' . $book->image) }}" alt="...">
                    <h4 class="card-title">Автор - <a class="link-dark" href="{{route('personal.author.index')}}">{{$book->author->fullname}}</a></h4>
                    <h4 class="card-title">Жанр - <a class="link-dark" href="{{route('personal.genre.index')}}">{{$book->genre->title}}</a></h4>
                    <h6 class="card-title">{{mb_strimwidth($book->short, 0, 200, '...')}}</h6>
                </div>
                <form action="{{route('book.like.store', $book->id)}}" method='POST'>
                    @csrf
                    @if(auth()->user()->likedBooks->contains($book->id))
                        <button class='btn btn-outline-danger mx-auto d-block' type='submit'>УБРАТЬ ИЗ ИЗБРАННОГО</button>
                    @else
                        <button class='btn btn-outline-success mx-auto d-block' type='submit'>ДОБАВИТЬ В ИЗБРАННОЕ</button>
                    @endif
                    
                </form>
            </div>
        </div>
@endforeach
    </div>
</div>


@endsection
