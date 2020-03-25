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
cod_solicitacao
data_solicitacao
descricao_solicitacao
status_solicitacao
cod_cliente
cod_profissional
*/

echo 'codigo = '.$_POST['data_solicitacao'];
$data_solicitacao = $descricao_solicitacao = $status_solicitacao = $cod_cliente = $cod_profissional = "";

if (isset($_POST["data_solicitacao"]) && 
	isset($_POST["cod_cliente"]) && 
	isset($_POST["cod_profissional"]))
{		
	$data_solicitacao = $_POST["data_solicitacao"];	
	$cod_cliente = $_POST["cod_cliente"];
	$cod_profissional = $_POST["cod_profissional"];
}

$sql = "INSERT INTO solicitacao(
data_solicitacao, 
cod_cliente, 
cod_profissional)

VALUES (
'".$data_solicitacao."', 
'".$cod_cliente."', 
'".$cod_profissional."'
);";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
	header("location:solicitacao.php");
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