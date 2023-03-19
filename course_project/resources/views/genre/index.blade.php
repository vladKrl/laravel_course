@extends('layouts/main')

@section('content')
<h1 class='text-center mb-3'>ЖАНРЫ</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Название</th>
      <th scope="col">Краткое описание</th>
    </tr>
  </thead>
  <tbody>
    @foreach($genres as $genre)
    <tr>
      <td><a class="link-dark" href="{{route('genre.show', $genre->id)}}">{{$genre->title}}</a></td>
      <td>{{$genre->short}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection