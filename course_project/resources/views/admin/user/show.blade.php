@extends('admin.layouts.main')

@section('content')
<div class="card" style="width:25rem;">
  <div class="card-body">
    <h3 class="card-title">Имя - {{$user->name}}</h3>
    <h5 class="card-title">Электронная почта - {{$user->email}}</h5>
    <h5 class="card-title">Роль - 
      @foreach($roles as $id => $role)  
        {{$user->role == $id ? $role : ''}}
      @endforeach
    </h5>
    <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
      @csrf
      @method('delete')    
      <a href="{{route('admin.user.index')}}" class="btn btn-primary">Вернуться</a>
      <a class="btn btn-primary" href="{{route('admin.user.edit', $user->id)}}">Редактировать</a>
      <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
    
  </div>
</div>


@endsection