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
					<a class="nav-link" href="login.php">Entrar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Cadastrar</a>
				</li>
				</ul>
			</div>  
		</nav><br>
		<div class="row">

			<div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded" style="background-color: #B8860B; border-color: gold; padding-bottom: 20px">
				<form name="signup" method="post" onsubmit="get_action(this)"><br>
					<h1 class="h3 mb-3 font-weight-normal" style="color: black; font-family: monospace;">Cadastro</h1>	
					<div class="form-group">
						<input class="form-control" type="text" name="email" placeholder="E-mail" maxlength="30" required>
					</div>			
					<div class="form-group">
						<input class="form-control" type="password" id="senha" name="senha" placeholder="Senha"	maxlength="40" required>
					</div>					
					<div class="form-group">
						<input class="form-control" type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Repita a Senha" required>
					</div>	
					<style>
						.custom-control-input:checked ~ .custom-control-label::before {
						  color: #fff;
						  border-color: #8B4513;
						  background-color: #8B4513;
						}
					</style>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="cliente" name="usuario_tipo" class="custom-control-input" value="cliente" checked>
					  <label class="custom-control-label" for="cliente">Cliente</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="profissional" name="usuario_tipo" class="custom-control-input" value="profissional">
					  <label class="custom-control-label" for="profissional">Profissional</label>
					</div>			
										
					
					<br><button type="submit" class="btn btn-warning" style="margin-top: 10px">Cadastrar</button>
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
	</div>
	
	<script src="../js/checkpassword.js"></script>		

	<script type="text/javascript">
	    function get_action(form) {
	    	if (document.getElementById("cliente").checked) {
				form.action = "signup_cliente.php";
			}
			else
				form.action = "signup_profissional.php"; 
	    }
	</script>
	<footer class=" container-fluid text-center bg-footer margin">
      <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
      <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
    </footer>
	

</body>
</html>