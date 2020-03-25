<?php

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

$sql = "SELECT cod_profissional, nome_profissional, tel_profissional, ramo_profissional, lat_profissional, lng_profissional FROM profissional";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    while($row = $result->fetch_assoc()) {
    	$arr = array();
        $arr[0] = $row["cod_profissional"];
        $arr[1] = $row["nome_profissional"];
        $arr[2] = $row["tel_profissional"];
        $arr[3] = $row["ramo_profissional"];
    	$arr[4] = $row["lat_profissional"].",".$row["lng_profissional"];

    	return $arr;        
    }
}else 	
	return null;
		
$conn->close();
?>