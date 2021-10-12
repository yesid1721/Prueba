<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konectarest - @yield('title')</title>
    {!! Html::style('css\style.css') !!}
    {!! Html::script('js/jquery-3.5.0.min.js') !!}
    {!! Html::script('https://kit.fontawesome.com/e3f426a82b.js') !!}
</head>
<body>
    <header>
        <h1><a href="{{ url('/') }}">KonectaStore</a></h1>
        <nav>
            <ul>
                @if(Auth::check())
                @if(Auth::user()->rol == '0')
                <li><a href="{{route('user.index')}}">Usuarios</a>
                    <ul>
                        <li><a href="{{route('user.create')}}">Añadir</a></li>
                    </ul>
                </li>
                @endif
                <li><a href="{{ route('client.index') }}">Clientes</a>
                    <ul>
                        <li><a href="{{ route('client.create') }}">Añadir</a></li>
                    </ul>
                </li>
                @endif
                <li>
                    @if(Auth::check())
                    <a href="">{{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="{{ route('user.logout') }}">Cerrar sesión</a></li>
                    </ul>
                    @else
                    <a href="{{ route('user.login') }}">Iniciar sesión</a>
                    @endif
                </li>   
            </ul>
        </nav>
        
    </header>
    @yield('content')
    {!! Html::script('js/script.js') !!}
</body>
</html>