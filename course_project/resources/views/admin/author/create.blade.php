@extends('admin.layouts.main')

@section('content')
<div>
  <form action="{{route('admin.author.store')}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="fullname" class="form-label">Имя писателя *</label>
      <input value="{{old('fullname')}}" name='fullname' type='text' class="form-control" id="fullname" placeholder="Достоевский Фёдор Михайлович">
    </div>
    @error('fullname')
      <p class='text-danger'>{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label for="birth_country" class="form-label">Страна рождения *</label>
      <input value="{{old('birth_country')}}" name='birth_country' type='text' class="form-control" id="birth_country" placeholder="Российская империя">
      @error('birth_country')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="birthday" class="form-label">Дата рождения *</label>
      <input value="{{old('birthday')}}" name='birthday' type='date' class="form-control" id="birthday">
      @error('birthday')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="deathday" class="form-label">Дата смерти</label>
      <input value="{{old('deathday')}}" name='deathday' type='date' class="form-control" id="deathday">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Изображение</label>
      <input name='image' class="form-control" type="file" id="image">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Создать</button>
      <a href="{{route('admin.author.index')}}" class="btn btn-danger">Назад</a>
    </div>
  </form>
</div>
@endsection