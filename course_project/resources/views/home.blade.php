@extends('personal.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Пользователь {{ auth()->user()->name }}</h2>   </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Добро пожаловать на сайт!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
