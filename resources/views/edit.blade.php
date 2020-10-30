@extends('layouts.app')

@section('title-block')Редактированиеphp @endsection

@section('content')
    <h1>Редактирование</h1>
    <div class="jumbotron">
        <form method="post" action="{{route('edit-form')}}">
            @csrf
            <div class="row">
                <div class="col-3">
                    <img src="/images/{{$plate->cover}}" class="card-img-top" width="100%" height="225"></img>
                </div>
                <div class="col-8">
                    <input type="hidden" name="id" value="{{$plate->id}}">
                    <input class="form-text col-5" name="album" required value="{{$plate->album}}">
                    <input class="form-text col-5" name="band" required value="{{$plate->band}}">
                    <button type="submit" class="btn btn-primary mt-2">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
@endsection
