<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprer</title>
    <!-- Encontrar um helper -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/build/ol.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
    <!-- Isolar este trecho -->
    <style>
        .map {
            height: 400px;
            width: 100%;
        }

        .margin{
            margin-top: 0px;
            background-color: black;
            color:yellow;
            font-family: monospace;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .navbar{
            font-family: monospace;
            font-size: 18px;
            background:#DAA429;
        }

        #map {
            height: 100%;
        }
        /*Provavelmente desnecessário */
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container-fluid{
            padding-bottom: 100px;
        }


        p, h1, h2, h3, h4, h5, h6{
            font-family: monospace;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/index"><img src="../img/APRERLOGO.png" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/login">Entrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
            </li>
            </ul>
        </div>  
    </nav>
    @yield('conteudo')

    <footer class=" container-fluid text-center bg-footer margin">
        <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
        <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
    </footer>
</body>
</html>