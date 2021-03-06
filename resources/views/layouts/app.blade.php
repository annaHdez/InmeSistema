<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inmekha') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Inmekha') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            @if(\Auth::user()->name)
                                <ul class= "navbar-nav ml-auto d-inline-flex margin: 40px">
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('deptos.index') }}">Departamentos</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('posiciones.index') }}">Posiciones</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('puestos.index') }}">Puestos</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('colab.index') }}">Colaboradores</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('empresas.index') }}">Empresas</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('proyectos.index') }}">Proyectos</a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem">
                                        <a class="nav-link margin: 40px" href="{{route('nomina.index') }}">Nómina</a>
                                    </li>
                                    <li class="nav-item d-inline" style="margin-right: 2rem;">
                                        <a class="nav-link margin: 40px">
                                                {{ Auth::user()->name}}
                                        </a>
                                    </li>
                                    <li class = "nav-item d-line" style = "margin-right: 2rem" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="nav-link margin: 40px" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                <ul>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
