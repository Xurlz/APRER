<?php
	session_start();
	
	if (isset($_POST["usuario"]) && $_POST["senha"]){
		$user = $_POST["usuario"];	
		$pass = $_POST["senha"];
		$_SESSION["usuario"] = $user;
		$_SESSION["senha"] = $pass;
		

		$pass_db = include "select_usuario.php";

		if ($pass_db == null) {	
			$_SESSION['senha_correta'] = false;			
			header("location:login.php");	
			exit();
		}
		else{		
			$cookie_nome = "usuario";
			$cookie_valor = $user;		
			setcookie($cookie_nome,$cookie_valor, time() + (60), "/");
			
			if ($pass_db == sha1($pass)){
				$_SESSION['senha_correta'] = true;	
				if ($_SESSION['tipo_usuario'] == "cliente") {
						header("location:home_cliente.php");
						exit();
					}else
						header("location:home_profissional.php");
						exit();
			}
			else{			
				$_SESSION['senha_correta'] = false;	
				header("location:login.php");
				exit();
			}

		}
		
	} else {
		session_unset();
		header("location:erro.php");
		exit();
	}
