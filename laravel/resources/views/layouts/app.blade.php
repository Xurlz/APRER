@php
    $paginaInicial = url()->current() === route('pagina_inicial');
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @if($paginaInicial)
    <style>
        #map {
            height: 800px;
            width: 100%;
        }
    </style>
    @endif
    
</head>
<body>
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

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
            <div id="map"></div>
            <script>              
                var map, infoWindow;

                function initMap() {
                    console.log(document.getElementById('map'))
                    map = new google.maps.Map(document.getElementById('map'), 
                    {
                        center: {lat: -23.556583, lng: -46.658813},
                        zoom: 15
                    });

                    var icons = {
                        profissional: {
                        icon: "{{asset('img/worker_30px.png')}}"
                        },
                        cliente: {
                        icon: "{{asset('img/hand_dollar.png')}}"
                        }
                    };

                    var features = [
                        {position: new google.maps.LatLng(-23.559203, -46.658943), type: 'cliente'},                 
                        {position: new google.maps.LatLng(-23.550887, -46.662143), type: 'profissional'},                 
                        {position: new google.maps.LatLng(-23.561184, -46.661664), type: 'cliente'},                 
                        {position: new google.maps.LatLng(-23.555060, -46.648190), type: 'profissional'}, 
                        {position: new google.maps.LatLng(-23.558428, -46.665875), type: 'cliente'},                
                        {position: new google.maps.LatLng(-23.562325, -46.659347), type: 'profissional'},  
                        {position: new google.maps.LatLng(-23.550600, -46.648450), type: 'cliente'},  
                        {position: new google.maps.LatLng(-23.543919, -46.666496), type: 'profissional'}
                    ];

                    infoWindow = new google.maps.InfoWindow;

                    // Create markers.
                    for (var i = 0; i < features.length; i++) {
                        var marker = new google.maps.Marker({
                        position: features[i].position,
                        icon: icons[features[i].type].icon,
                        map: map
                        });
                        google.maps.event.addListener( marker, 'click', function() {
                            //infoWindow.setContent( this.info );
                            //infoWindow.open( map, this );
                            window.location.href = "pages/login.php";
                        });            
                    };

                    var pos = {lat: -23.556583, lng: -46.658813};
                        // Try HTML5 geolocation.
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Você está aqui');
                        infoWindow.open(map);
                        map.setCenter(pos);
                        }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                        });
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                }

                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?'Error: The Geolocation service failed.' :'Error: Your browser doesn\'t support geolocation.');
                    infoWindow.open(map);                
                }
            </script>

        @else
        <main class="py-4">
            @yield('content')
        </main>
        @endif

        <footer class="footer bg-footer container-fluid text-center">
            <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
            <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
        </footer>
    </div>
    
</body>
</html>
