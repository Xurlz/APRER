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
/*
usuario (email)			email_profissional
nome 					nome_profissional
cpf 					cpf_profissional
cep 					cep_profissional
rua 					rua_profissional
numero 					numero_profissional
complemento				complemento_profissional
bairro 					bairro_profissional
cidade 					cidade_profissional
uf 						uf_profissional
telefone 				tel_profissional
região de atendimento 	regiao_atendimento
ramo de atuação			ramo_profissional
senha 					senha_profissional
latitude 				lat_profissional
longitude				lng_profissional
*/


$email_profissional = $nome_profissional = $cpf_profissional = $cep_profissional = $rua_profissional = $numero_profissional = $complemento_profissional = $bairro_profissional = $cidade_profissional = $uf_profissional = $tel_profissional = $regiao_atendimento = $ramo_profissional = $senha_profissional = $lat_profissional = $lng_profissional = "";

if (isset(
	$_POST["email_profissional"]) && 
	$_POST["nome_profissional"] && 
	$_POST["cpf_profissional"] && 
	$_POST["cep_profissional"] && 
	$_POST["rua_profissional"] && 
	$_POST["numero_profissional"] && 
	$_POST["bairro_profissional"] && 
	$_POST["cidade_profissional"] && 
	$_POST["uf_profissional"] && 
	$_POST["tel_profissional"] && 
	$_POST["regiao_atendimento"] && 
	$_POST["ramo_profissional"] && 
	$_POST["senha_profissional"] && 
	$_POST["lat_profissional"] && 
	$_POST["lng_profissional"]
){		

	
	$email_profissional = $_POST["email_profissional"];
	$nome_profissional = test_input($_POST["nome_profissional"]);	
	$cpf_profissional = test_input($_POST["cpf_profissional"]);
	$cep_profissional = test_input($_POST["cep_profissional"]);
	$rua_profissional = test_input($_POST["rua_profissional"]);
	$numero_profissional = test_input($_POST["numero_profissional"]);
	$complemento_profissional = test_input($_POST["complemento_profissional"]);
	$bairro_profissional = test_input($_POST["bairro_profissional"]);
	$cidade_profissional = test_input($_POST["cidade_profissional"]);
	$uf_profissional = test_input($_POST["uf_profissional"]);
	$tel_profissional = test_input($_POST["tel_profissional"]);
	$regiao_atendimento = test_input($_POST["regiao_atendimento"]);
	$ramo_profissional = test_input($_POST["ramo_profissional"]);	
	$senha_profissional = sha1($_POST["senha_profissional"]);
	$lat_profissional = test_input($_POST["lat_profissional"]);
	$lng_profissional = test_input($_POST["lng_profissional"]);
	

	


	
}

$sql = "INSERT INTO profissional 
(email_profissional, 
nome_profissional, 
cpf_profissional, 
cep_profissional, 
rua_profissional, 
numero_profissional, 
complemento_profissional, 
bairro_profissional, 
cidade_profissional, 
uf_profissional, 
tel_profissional, 
regiao_atendimento, 
ramo_profissional, 
senha_profissional,
lat_profissional,
lng_profissional)

VALUES (
'$email_profissional', 
'$nome_profissional', 
'$cpf_profissional', 
'$cep_profissional', 
'$rua_profissional', 
'$numero_profissional', 
'$complemento_profissional', 
'$bairro_profissional', 
'$cidade_profissional', 
'$uf_profissional', 
'$tel_profissional', 
'$regiao_atendimento', 
'$ramo_profissional', 
'$senha_profissional',
'$lat_profissional',
'$lng_profissional'
);";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
	$_SESSION['nome'] = $nome_profissional;
	header("location:home_profissional.php");
    //echo "PROFISSIONAL CADASTRADO COM SUCESSO";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>