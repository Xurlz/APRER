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
</head>
<body>
	<div class="container-fluid" style="background-color: #DAA429">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="../index.php"><img src="../img/APRERLOGO.png" width="150"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Entrar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Cadastrar</a>
				</li>
				</ul>
			</div>  
		</nav><br>
		<div class="row">

				<div class="col-3"></div>

				<div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold">
					<form name="login" method="post" action="loginhandle.php"><br>
						<div class="form-group">
							 <h1 class="h3 mb-3 font-weight-normal" style="color: black; font-family: monospace;">Login</h1>
							<input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
						</div>
						<div class="form-group">
							<input style="border-color: 
							<?php if (isset($_SESSION['senha_correta'])) if (!$_SESSION['senha_correta']) echo "red" ?> " class="form-control" type="password" name="senha" placeholder="Senha" required>
						</div>
						<div class="form-group">
							<a href="#" data-toggle="tooltip" title="Em Construção" style="color: black">Redefinir senha</a>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-warning">Entrar</button>						
						</div>						
					</form>
				</div>

				<div class="col-3"></div>
				
			</div>
		</div>
		
	</div>
	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	 <footer class=" container-fluid text-center bg-footer margin">
      <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
      <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
    </footer>
</body>
</html>