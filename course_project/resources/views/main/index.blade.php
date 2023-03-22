@extends('layouts.main')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
</div>


<div class="content">
  <div class="row">
    <div class="mb-3 col-12">
      <h1 class='text-center'>КНИГИ</h1>
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
            <!-- ТУТ КАРТИНКУ КНИГИ БЫ КУДА-НИБУДЬ -->
            <h4 class="card-title">Автор - <a class="link-dark" href="#">{{$book->author->fullname}}</a></h4> <!-- route('admin.author.show', $author->id)}} -->
            <!-- ТУТ КАРТИНКУ АВТОРА БЫ -->
           
            <h4 class="card-title">Жанр - <a class="link-dark" href="#">{{$book->genre->title}}</a></h4> <!-- route('admin.genre.show', $genre->id)}} -->
            <h6 class="card-title">{{$book->short}}</h6>
            <a href="" class="btn btn-primary">Вернуться</a> <!-- route('admin.book.index')}} -->
        </div>
    </div>
    @endforeach


@endsection
