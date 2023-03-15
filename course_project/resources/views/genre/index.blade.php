@extends('layouts/main')

@section('content')
<table class="table">
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