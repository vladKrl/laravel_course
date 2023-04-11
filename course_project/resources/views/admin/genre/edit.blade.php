@extends('admin.layouts.main')

@section('content')
<div>
  <form action="{{route('admin.genre.update', $genre->id)}}" method='POST'>
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Название жанра</label>
      <input name='title' type='text' class="form-control" id="title" value='{{$genre->title}}' placeholder="Научная фантастика">
      @error('title')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">  
      <label for="short" class="form-label">Краткое описание</label>
      <textarea name='short' class="form-control" id="short" placeholder="Основывается на фантастических допущениях (спекуляциях) в областях науки. Описывает вымышленные технологии и научные открытия, контакты с нечеловеческим разумом, возможное будущее или альтернативный ход истории, и влияние этих допущений на человеческое общество и личность. Действие часто происходит в будущем">{{$genre->short}}</textarea>
      @error('short')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Редактировать</button>
        <a class="btn btn-danger" href="{{route('admin.genre.index')}}">Назад</a>
    </div>
  </form>
</div>
@endsection
