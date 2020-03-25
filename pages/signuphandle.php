<?php
	session_start();

	$user = $pass = $filename = "";
	
	if (isset($_POST["usuario"]) && $_POST["senha"]){
		
		$user = test_input($_POST["usuario"]);		
		$pass = test_input($_POST["senha"]);
		$cookie_nome = "usuario";
		$cookie_valor = $user;
		setcookie($cookie_nome,$cookie_valor, time() + (60*3), "/");		
		$_SESSION["user"] = $user;

		$usuario_tipo = test_input($_POST["usuario_tipo"]);

		if ($usuario_tipo == "cliente")
			header("location:signup_cliente.php");	
		else
			header("location:signup_profissional.php");	
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}