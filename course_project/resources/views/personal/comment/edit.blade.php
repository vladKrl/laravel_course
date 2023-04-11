@extends('personal.layouts.main')

@section('content')
<div>
  <form action="{{route('personal.comment.update', $comment->id)}}" method='POST'>
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="body" class="form-label">Комментарий</label>
      <textarea name='body' type='text' class="form-control" id="body" placeholder="Прекрасная книга! Всем советую, не разочаровался!">{{$comment->body}}</textarea>
      @error('body')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>
  </form>
</div>
@endsection
