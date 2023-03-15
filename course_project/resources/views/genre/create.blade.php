@extends('layouts/main')

@section('content')
<div>
  <form action="{{route('genre.store')}}" method='POST'>
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Название жанра</label>
      <input value="{{old('title')}}" name='title' type='text' class="form-control" id="title" placeholder="Научная фантастика">
      @error('title')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="short" class="form-label">Краткое описание</label>
      <textarea name='short' class="form-control" id="short" placeholder="Основывается на фантастических допущениях (спекуляциях) в областях науки. Описывает вымышленные технологии и научные открытия, контакты с нечеловеческим разумом, возможное будущее или альтернативный ход истории, и влияние этих допущений на человеческое общество и личность. Действие часто происходит в будущем"></textarea>
      @error('short')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Создать</button>
      <a href="{{route('genre.index')}}" class="btn btn-danger">Назад</a>
    </div>
  </form>
</div>
@endsection