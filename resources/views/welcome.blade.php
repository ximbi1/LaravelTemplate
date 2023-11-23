<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a {{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            line-height: 1.6;
        }
        .header {
            background: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            margin: 0;
            font-weight: 700;
        }
        .navigation {
            margin-top: 15px;
        }
        .navigation a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }
        .navigation a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 40px 0;
        }
        .footer {
            background: #fff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        .footer p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenido a {{ config('app.name') }}</h1>
        @if (Route::has('login'))
            <div class="navigation">
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
    </div>

    <div class="content">
        <p>Explora la belleza y la simplicidad de {{ config('app.name') }}.</p>
        <p>Construye algo increíble.</p>
    </div>

    <div class="footer">
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </div>
</body>
</html>
