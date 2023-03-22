@extends('admin/layouts/main')

@section('content')
<div class="content">
  <div class="row">
    <div class="mb-3 col-11">
      <h1 class='text-center'>ПОЛЬЗОВАТЕЛИ</h1>
    </div>
    <div class="col-1">
      <a href="{{route('admin.user.create')}}" class='btn btn-block btn-primary'>Добавить</a>
    </div>
  </div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Имя</th>
      <th scope="col">Электронная почта</th>
      <th scope="col">Роль</th>
      <th class='text-center' colspan='3' scope="col">ДЕЙСТВИЯ</th>
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
      @foreach($roles as $id => $role)  
        {{$user->role == $id ? $role : ''}}
      @endforeach
      </td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.user.show', $user->id)}}">ОТКРЫТЬ</a></td>
      <td class='text-center'><a class='btn btn-primary' href="{{route('admin.user.edit', $user->id)}}">ИЗМЕНИТЬ</a></td>
      <td class='text-center'>
        <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
          @csrf
          @method('delete')
          <button type='submit' class='btn btn-danger'>УДАЛИТЬ</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection