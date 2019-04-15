<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: lightblue;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>





<div class="flex-center position-ref full-height">
    <div class="top-left links">
        <a class="navbar-brand" href="{{ url('/products') }}">
            Tabele
        </a>

    </div>

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Rejestracja</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        @if(Auth::guest())
        <h2>Prosze sie zalogowac</h2>
        @endif
        <div class="title m-b-md">
            Strona testowa
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Dokumentacja laravela</a>
            <a href="https://laracasts.com">Larabzdety</a>
            <a href="https://laravel-news.com">Newsy</a>
            <a href="https://google.com">google</a>
            <a href="https://facebook.com">facebook</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>