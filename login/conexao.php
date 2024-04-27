<?php

$servername = "localhost";
$username = "yVini";
$senha = "Vinicius10";
$dbname = "myDB";

$mysqli = new mysqli($servername, $username, $senha, $dbname);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>