@extends('personal.layouts.main')

@section('content')
<div class="container">
@foreach($genres as $genre)
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card" style="width:50rem;">
                <div class="card-header"><h2>{{$genre->title}}</h2></div>
                <div class="card-body">
                    <h5 class="card-title">{{$genre->short}}</h5>
                </div>
            </div>
        </div>
        <div class="col-4 card" style="width:25rem;">
                <div class="card-header"><h3>Список книг</h3></div>
                <div class="card-body">
                    @if(count($genre->books) != 0)
                        @foreach($genre->books as $book)
                            <div class="d-flex align-items-center row mb-2">
                                <div class="col-8 pt-5">
                                    <a class="link-dark" href="{{route('personal.book.show', $book->id)}}"><h5>{{$book->title}}</h5></a>
                                </div>
                                <div class="col-4"><img height='50px' src="{{ asset('storage/' . $book->image) }}" alt="..."></div>
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
