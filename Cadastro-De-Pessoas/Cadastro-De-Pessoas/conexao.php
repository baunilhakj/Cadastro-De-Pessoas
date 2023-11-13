<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Conexão falhou: ". $conn->connect_error);
}

function mostra_data($data) {
    $d = explode('-', $data);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}
