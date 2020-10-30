@extends('layouts.app')

@section('title-block')Справочник музыкальных пластинок@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="row justify-content-center">
        @foreach($plates as $plate)
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="/images/{{$plate->cover}}" class="card-img-top" width="100%" height="225"></img>
                    <div class="card-body">
                        <p class="card-text">
                        <p class="plate-band">{{$plate->band}}</p>
                        <p class="plate-album">{{$plate->album}}</p>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('edit')}}/{{$plate->id}}" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                            <button id="{{$plate->id}}" token="{{ csrf_token() }}" type="button" class="btn btn-sm btn-outline-secondary button-delete">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if($page != 1)
            <a href="{{route('home')}}/{{$page-1}}" class="btn btn-info">Пред.</a>
        @endif
        @if(($pagesCount - $page) > 0)
            <a href="{{route('home')}}/{{$page+1}}" class="btn btn-info">След.</a>
        @endif
    </div>

@endsection

