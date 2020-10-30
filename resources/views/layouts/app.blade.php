<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title-block')</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('3169983.svg')}}">
</head>

<body class="bg-light">
@include("inc.header")

<main role="main">
    <div class="album py-5">
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            @if(Request::is("/"))
                <a href="#">Наверх</a>
            @endif
        </p>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>

</body></html>
