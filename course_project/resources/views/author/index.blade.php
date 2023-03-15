@extends('layouts/main')

@section('content')
<!-- <div>
    <a href="{{route('author.create')}}" class="btn btn-primary">Добавить писателя</a>
</div> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Полное имя</th>
      <th scope="col">Страна</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Дата смерти</th>
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($authors as $author)
    <tr>
      <td><a class="link-dark" href="{{route('author.show', $author->id)}}">{{$author->fullname}}</a></td>
      <td>{{$author->birth_country}}</td>
      <td>{{$author->birthday}}</td>
      <td>{{$author->deathday}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif