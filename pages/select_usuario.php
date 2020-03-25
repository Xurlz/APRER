<?php
session_start();

$servername = "localhost";
$username = "id11261751_root";
$password = "123456";
$dbname = "id11261751_aprer";

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aprer";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nome_profissional, senha_profissional FROM profissional WHERE email_profissional = '".$_SESSION["usuario"]."'";
$result = $conn->query($sql);

$nome = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$nome = $row["nome_profissional"];
    	$_SESSION['nome'] = $nome;
    	$_SESSION['tipo_usuario'] = "profissional";
        return $row["senha_profissional"];
    }
} else {
	$sql = "SELECT cod_cliente, nome_cliente, senha_cliente FROM cliente WHERE email_cliente = '".$_SESSION["usuario"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$cod = $row["cod_cliente"];
	    	$nome = $row["nome_cliente"];
	    	$_SESSION['cod'] = $cod;	    	
	    	$_SESSION['nome'] = $nome;
	    	$_SESSION['tipo_usuario'] = "cliente";	    	
	        return $row["senha_cliente"];	    
	    }
	} else{		
	    return null;
	}	
}
$conn->close();
?>