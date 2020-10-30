<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{asset('3169983.svg')}}" width="25" height="25">
                <strong>Пластинки</strong>
            </a>
            @if(Request::route()->getName() == 'home' && !auth()->check())
                <a class="btn btn-light" href="{{route('authorization')}}">Войти</a>
            @endif
            @if(auth()->check())
                <div class="d-flex">
                    <div class="auth-user mr-2">{{explode('@', auth()->user()['email'])[0]}}</div>
                    <a href="{{route('logout')}}">Выйти</a>
                </div>
            @endif
        </div>
    </div>
</header>
