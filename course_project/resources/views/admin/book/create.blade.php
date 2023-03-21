@extends('layouts/main')

@section('content')
<div>
  <form action="{{route('admin.book.store')}}" method='POST' enctype='multipart/form-data'>
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Название книги *</label>
      <input value="{{old('title')}}" name='title' type='text' class="form-control" id="title" placeholder="Преступление и наказание">
      @error('title')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="short" class="form-label">Краткое описание *</label>
      <textarea name='short' class="form-control" id="short" placeholder="Действие романа начинается жарким июльским днём в Петербурге. Студент Родион Романович Раскольников, вынужденный уйти из университета из-за отсутствия денег, направляется в квартиру к процентщице Алёне Ивановне, чтобы сделать «пробу своему предприятию». В сознании героя в течение последнего месяца созревает идея убийства «гадкой старушонки»; одно-единственное преступление, по мнению Раскольникова, изменит его собственную жизнь и избавит сестру Дуню от необходимости выходить замуж за «благодетеля» Петра Петровича Лужина. Несмотря на проведённую «разведку», тщательно продуманный план ломается">{{old('short')}}</textarea>
      @error('short')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="author_id" class="form-label">Автор</label>
      <select id='author_id' class="mb-2 form-select" name='author_id'>
      @foreach($authors as $author)
        <option {{old('author_id') == $author->id ? 'selected':'' }} value='{{$author->id}}'>{{$author->fullname}}</option>
      @endforeach
      </select>
      <a href="{{route('admin.author.create')}}" class="btn btn-primary">Добавить писателя</a>
    </div>
    <div class="mb-3">
      <label for="genre_id" class="form-label">Жанр</label>
      <select id='genre_id' class="mb-2 form-select" name='genre_id'>
      @foreach($genres as $genre)
        <option {{old('genre_id') == $genre->id ? 'selected':'' }} value='{{$genre->id}}'>{{$genre->title}}</option>
      @endforeach
      </select>
      <a href="{{route('admin.genre.create')}}" class="btn btn-primary">Добавить жанр</a>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Изображение</label>
      <input name='image' class="form-control" type="file" id="image">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Создать</button>
      <a href="{{route('admin.book.index')}}" class="btn btn-danger">Назад</a>
    </div>
  </form>
</div>
@endsection
