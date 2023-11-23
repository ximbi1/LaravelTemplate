<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡La página más divertida del mundo!</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Comic+Sans+MS&display=swap" rel="stylesheet" />

    <style>
        body {
            background-color: #fffc00;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: #003366;
            text-align: center;
        }
        .title {
            color: #ff33cc;
            text-shadow: 2px 2px 4px #000000;
        }
        .funny-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .dancing-text {
            animation: dance 2s infinite;
        }
        @keyframes dance {
            0%   { transform: translateX(0px); }
            25%  { transform: translateX(10px); }
            75%  { transform: translateX(-10px); }
            100% { transform: translateX(0px); }
        }
        .footer {
            margin-top: 50px;
            font-size: 14px;
            color: #666666;
        }
    </style>
</head>
<body>
    <h1 class="title">¡Bienvenido a la página más divertida de {{ config('app.name') }}!</h1>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <p class="dancing-text">¿Estás listo para ver algo increíble?</p>
    <img src="https://www.iebschool.com/blog/wp-content/uploads/2015/03/hacer-venta.gif" alt="Imagen divertida" class="funny-image">
    
    <div class="footer">
        <p>Esta página fue creada para sacarte una sonrisa 😄</p>
        <p>¡No olvides compartir la alegría!</p>
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </div>
</body>
</html>
