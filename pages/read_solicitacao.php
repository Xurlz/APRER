<?php
//session_start();


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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT cod_solicitacao, data_solicitacao, descricao_solicitacao, status_solicitacao, cod_cliente, cod_profissional FROM solicitacao";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

    	$arr = array();
        $arr[0] = $row["cod_solicitacao"];
        $arr[1] = $row["data_solicitacao"];
        $arr[2] = $row["descricao_solicitacao"];
        $arr[3] = $row["status_solicitacao"];
        $arr[4] = $row["cod_cliente"];
        $arr[5] = $row["cod_profissional"];

    	return $arr;
    }
}else 	
	return null;
		
$conn->close();
?>