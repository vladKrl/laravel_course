@extends('personal.layouts.main')

@section('content')
<div class="container">
@foreach($authors as $author)
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>{{$author->fullname}}</h2></div>
                <img src="{{ asset('storage/' . $author->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Страна рождения - {{$author->birth_country}}</h5>
                    <h5 class="card-title">Дата рождения - {{$author->birthday}}</h5>
                    @if ($author->deathday)
                        <h5 class="card-title">Дата смерти - {{$author->deathday}}</h5>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-4 card" style="width:25rem;">
                <div class="card-header"><h3>Список книг</h3></div>
                <div class="card-body">
                    @if(count($author->books) != 0)
                        @foreach($author->books as $book)
                            <div class="row mb-2">
                                <div class="col-8 pt-5">
                                    <a class="link-dark" href="{{route('personal.book.show', $book->id)}}"><h3>{{$book->title}}</h3></a>
                                </div>
                                <div class="col-4"><img width='100px' height='100px' src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..."></div>
                            </div>
                        @endforeach
                    @else
                        <div class="row">
                            <div class="col-9">
                                <h2>Книг не найдено</h2>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
    </div>

@endforeach
</div>
@endsection
