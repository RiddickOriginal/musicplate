@extends('layouts.app')

@section('title-block')Авторизация@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-signin text-center" action="{{route('auth-form')}}" method="post">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
        <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus="">
        <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>
@endsection
