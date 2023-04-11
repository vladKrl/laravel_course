@extends('personal.layouts.main')

@section('content')
<div class="card" style="width:230rem;">
  <div class="card-body">
    <div class="content">
      <div class="row">
        <div class="col-6">
          <h3 class="card-title">{{$book->title}}</h3>
          <h4 class="mb-5 card-title">Жанр - {{$book->genre->title}}</h4>
          <h6 class="card-title">{{$book->short}}</h6>
        </div>
        <div class="col-6"> <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..."></div>
      </div>
    </div>
    <div class="content">
      <div class="mb-5 row">
        <div class="col-4">
          <h4 class="card-title">Автор - {{$book->author->fullname}}</h4>
          <div class="card-body">
            @if(count($book->author->books) != 0)
            <h4 class="card-title">Другие книги автора:</h4>
            @foreach($book->author->books as $bookOther)
            <div class="row mb-2">
              @if($book->title != $bookOther->title)
              <div class="col-8 pt-5">
                <a class="link-dark" href="{{route('personal.book.show', $book->id)}}">
                  <h3>{{$bookOther->title}}</h3>
                </a>
              </div>
              <div class='col-4'>
                <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="...">
              </div>
              @endif
            </div>
            @endforeach
            @else
            <div class="row">
              <div class="col-9">
                <h2>Других книг нет</h2>
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="col-8"><img src="{{ asset('storage/' . $book->author->image) }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="row">
      <div class="col-9">  
              <h2>Ваш комментарий</h2>
        </div>
        <div class="col-3">
          <form action="{{route('book.like.store', $book->id)}}" method='POST'>
            @csrf
            @if(auth()->user()->likedBooks->contains($book->id))
            <button class='btn btn-outline-danger' type='submit'>УБРАТЬ ИЗ ИЗБРАННОГО</button>
            @else
            <button class='btn btn-outline-success' type='submit'>ДОБАВИТЬ В ИЗБРАННОЕ</button>
            @endif
          </form>
        </div>
      
      <div class="row">
        <div class="col-12">
          <form method='POST' action="{{route('book.comment.store', $book->id)}}">
            @csrf
            <div class="row">
              <div class="mb-3 text-center form-group col-12">
                <textarea name="body" id="body" class='form-control' rows="10"
                  placeholder='Хорошая книга! Всем рекомендую ознакомиться, не пожалеете!'></textarea>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-12">
                <input type="submit" value='Отправить' class='btn btn-primary'>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-10">
                <h2>Комментарии ({{$book->comments->count()}})</h2>
              </div>
            </div>
          </form>
        </div>
      </div>

      </div>
      @foreach($book->comments as $comment)
      <div class='border mb-2 comment-text'>
        <span class='username'>
          <div>
            <strong>{{$comment->user->name}}</strong>
          </div>
          <span class='text-muted float-right'>{{$comment->dateAsCarbon->diffForHumans()}}</span>
          {{$comment->body}}
        </span>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection