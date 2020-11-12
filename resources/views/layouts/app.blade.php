@php
    $paginaInicial = url()->current() === route('pagina_inicial');
    $paginaAvaliacao = url()->current() === route('teste_avaliacao');
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}" defer></script>
    @if($paginaInicial)
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCc_kvWmuRQEnuZG3bF6rNjx2-mSYXetQ&callback=initMap" defer></script>
    @endif

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @if($paginaInicial)
    <style>
        #map {
            height: 750px;
            width: 100%;
        }
    </style>
    @endif
    
</head>
<body class='bg-warning'>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/APRERLOGO.png')}}" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/login.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Encontre um Profissional</a>
                        </li>
                    </ul>
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Barra de pesquisa -->
                        <div class="collapse navbar-collapse" >
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                                <button class="btn btn-warning my-2 my-sm-0" type="submit">Pesquisar</button>
                            </form>
                        </div>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if ($paginaInicial)
            @include('mapa')
        @else
        <main class="py-4">
            @yield('content')
        </main>
        @endif

        @if ($paginaAvaliacao)
        <footer class="footer-fixo container-fluid text-center">
            <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
            <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
        </footer>
        @else
        <footer class="footer container-fluid text-center">
            <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
            <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
        </footer>
        @endif
        
    </div>
    
</body>
</html>
