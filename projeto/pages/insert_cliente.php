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

/*
usuário (email)		email_cliente
nome 				nome_cliente
cpf 				cpf_cliente
cep 				cep_cliente
rua 				rua_cliente
numero 				numero_cliente
complemento 		complemento_cliente
bairro 				bairro_cliente
cidade 				cidade_cliente
uf 					uf_cliente
telefone 			tel_cliente
senha 				senha_cliente
*/

$email_cliente = $nome_cliente = $cpf_cliente = $cep_cliente = $rua_cliente = $numero_cliente = $complemento_cliente = $bairro_cliente = $cidade_cliente = $uf_cliente = $tel_cliente = $senha_cliente = "";

if (isset($_POST["email_cliente"]) && $_POST["nome_cliente"] && $_POST["cpf_cliente"] && $_POST["cep_cliente"] && $_POST["rua_cliente"] && $_POST["numero_cliente"] && $_POST["bairro_cliente"] && $_POST["cidade_cliente"] && $_POST["uf_cliente"] && $_POST["tel_cliente"] && $_POST["senha_cliente"]){

	$email_cliente = $_POST["email_cliente"];		
	$nome_cliente = test_input($_POST["nome_cliente"]);
	$cpf_cliente = test_input($_POST["cpf_cliente"]);
	$cep_cliente = test_input($_POST["cep_cliente"]);
	$rua_cliente = test_input($_POST["rua_cliente"]);
	$numero_cliente = test_input($_POST["numero_cliente"]);
	$complemento_cliente = test_input($_POST["complemento_cliente"]);
	$bairro_cliente = test_input($_POST["bairro_cliente"]);
	$cidade_cliente = test_input($_POST["cidade_cliente"]);
	$uf_cliente = test_input($_POST["uf_cliente"]);
	$tel_cliente = test_input($_POST["tel_cliente"]);
	$senha_cliente = sha1($_POST["senha_cliente"]);

	} else {
		session_unset();
		header("location:erro.php");
		exit();
	}

$sql = "INSERT INTO cliente (email_cliente, nome_cliente, cpf_cliente, cep_cliente, rua_cliente, numero_cliente, complemento_cliente, bairro_cliente, cidade_cliente, uf_cliente, tel_cliente, senha_cliente)
VALUES ('$email_cliente', '$nome_cliente', '$cpf_cliente', '$cep_cliente', '$rua_cliente', '$numero_cliente', '$complemento_cliente', '$bairro_cliente', '$cidade_cliente', '$uf_cliente', '$tel_cliente', '$senha_cliente')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['nome'] = $nome_cliente;
	header("location:home_cliente.php");
    //echo "CLIENTE CADASTRADO COM SUCESSO";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>