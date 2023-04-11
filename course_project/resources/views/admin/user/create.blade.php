@extends('admin.layouts.main')

@section('content')
<div>
  <form action="{{route('admin.user.store')}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Имя пользователя *</label>
      <input value="{{old('name')}}" name='name' type='text' class="form-control" id="name" placeholder="Пётр Пустота">
    </div>
    @error('name')
      <p class='text-danger'>{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label for="email" class="form-label">Электронная почта *</label>
      <input value="{{old('email')}}" name='email' type='email' class="form-control" id="email" placeholder="pyotro@gmail.by">
      @error('email')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Пароль *</label>
      <input name='password' type='password' class="form-control" id="password">
      @error('password')
      <p class='text-danger'>{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Роль</label>
      <select id='role' class="mb-2 form-select" name='role'>
      @foreach($roles as $id => $role)
        <option {{old('role') == $id ? 'selected':'' }} value='{{$id}}'>{{$role}}</option>
      @endforeach
      </select>
    </div>
    <!-- <div class="mb-3">
      <label for="image" class="form-label">Изображение</label>
      <input name='image' class="form-control" type="file" id="image">
    </div> -->
    <div>
      <button type="submit" class="btn btn-primary">Создать</button>
      <a href="{{route('admin.user.index')}}" class="btn btn-danger">Назад</a>
    </div>
  </form>
</div>
@endsection