@extends('layouts/main')

@section('content')
<div>
  <form action="{{route('admin.author.update', $author->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="fullname" class="form-label">Имя писателя *</label>
      <input name='fullname' type='text' class="form-control" id="fullname" placeholder="Достоевский Фёдор Михайлович" value='{{$author->fullname}}'>
      @error('fullname')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="birth_country" class="form-label">Страна рождения *</label>
      <input name='birth_country' type='text' class="form-control" id="birth_country" placeholder="Российская империя" value='{{$author->birth_country}}'>
      @error('birth_country')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="birthday" class="form-label">Дата рождения *</label>
      <input name='birthday' type='date' class="form-control" id="birthday" value='{{$author->birthday}}'>
      @error('birthday')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="deathday" class="form-label">Дата смерти</label>
      <input name='deathday' type='date' class="form-control" id="deathday" value='{{$author->deathday}}'>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Изображение</label>
      <input name='image' class="form-control" type="file" id="image" value='{{$author->image}}'>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Редактировать</button>
      <a class="btn btn-danger" href="{{route('admin.author.index')}}">Назад</a>
    </div>
  </form>
</div>
@endsection
