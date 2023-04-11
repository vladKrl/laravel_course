@extends('personal.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">

@if($comments->count() != 0)
@foreach($comments as $comment)
        <div class="col-md-3">
            <div class="card" style='min-height:200px;'>

                <div class="card-body d-flex flex-column justify-content-between">
                
                    <h4 class="card-title"><a class='link-dark' href="{{route('personal.book.show', $comment->book->id)}}">{{$comment->body}}</a></h4>
                    <form action="{{route('personal.comment.delete', $comment->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger'>Удалить</button>
                    </form>
                    <a class='btn btn-primary' href="{{route('personal.comment.edit', $comment->id)}}">Редактировать</a>
                </div>
            </div>
        </div>
@endforeach
@else
<div class="col-md-3">
            <div class="card" style='min-height:200px;'>
                <div class="card-body d-flex flex-column justify-content-between">  
                    <h4 class="card-title"><strong>{{auth()->user()->name}}</strong>, вы ещё ничего не комментировали!</h4>
                    <a class='btn btn-primary' href="{{route('personal.main.index')}}">Оставьте свой комментарий =)</a>
                </div>
            </div>
        </div>
@endif

    </div>
</div>
@endsection
