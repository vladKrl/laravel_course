@extends('admin.layouts.main')

@section('content')
<div>
  <form action="{{route('admin.user.update', $user->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name" class="form-label">Имя пользователя *</label>
      <input name='name' type='text' class="form-control" id="name" placeholder="Пётр Пустота" value='{{$user->name}}'>
      @error('name')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Электронная почта *</label>
      <input name='email' type='email' class="form-control" id="birth_country" placeholder="pyotro@gmail.by" value='{{$user->email}}'>
      @error('email')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <input type='hidden' name='user_id' value='{{ $user->id }}'>
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Роль</label>
       <select id='role' class="mb-2 form-select" name='role'>
      @foreach($roles as $id => $role)
        <option {{$user->role == $id ? 'selected':'' }} value='{{$id}}'>{{$role}}</option>
      @endforeach
      </select>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Редактировать</button>
      <a class="btn btn-danger" href="{{route('admin.user.index')}}">Назад</a>
    </div>
  </form>
</div>
@endsection
