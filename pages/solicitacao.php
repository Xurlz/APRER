<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>APRER</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
          <style>
            .map {
              height: 400px;
              width: 100%;
            }
          </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/build/ol.js"></script>
    </head>
    <body style="background-color: #DAA429">
       <nav class="navbar navbar-expand-lg navbar-light" >

          <a class="navbar-brand" href="#">
            <img src="../img/APRERLOGO.png" width="150">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="solicitacao.php">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="home_cliente.php">Encontre um Profissional</a>
                </li>
                
              </ul>
              <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                  <a class="nav-link">Olá, <?php echo strtoupper($_SESSION["nome"]) ?></a>
                </li>
                <li class="nav-item border border-dark rounded">
                  <a class="nav-link" href="logout.php">Sair</a>
                </li>
              </ul>            
            
            </div>
          <button type="submit" class="btn btn-default" id="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </nav>

        
          <div class="row" id="map">
            <div class="col-3"></div>


        <div class="col-6 list-group-flush" style="background-color: #B8860B; border-color: gold; overflow-y: scroll; height: 100%">

              <form name="solicitacao" method="post" action="create_solicitacao.php">
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">                  
                  <h3 class="mb-1" id='ramo_profissional'><?php error_reporting(0); if($_POST['ramo_profissional']) echo $_POST['ramo_profissional']; else echo "Profissão";?></h3>  
                  <div>
                    <small id="data_solicitacao">Solicitado em <?php echo date("d/m/Y"); ?></small><br>                    
                  </div>
                </div>  
                <div class="">
                  <h5 class="mb-1" id="nome_profissional"><?php if($_POST['nome_profissional']) echo $_POST['nome_profissional']; ?></h5>
                  <h5 class="mb-1" id="tel_profissional"><?php include "select_profissional.php"; echo $arr[2];?></h5>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Status Pendente</h5>
                    <div>
                      <button type="button" class="btn btn-warning btn-sm" id="btn_confirmar">Confirmar</button>
                      <button type="button" class="btn btn-warning btn-sm" id="btn_cancelar" onclick="location.href = 'home_cliente.php';">Cancelar</button>
                    </div>                    
                  </div>                  
                </div>
              </a>
              </form>
            </div>
            <div class="col-3"></div>
          </section>
          <footer class=" container-fluid text-center bg-footer margin">
            <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
            <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
          </footer>

    </body>
</html>