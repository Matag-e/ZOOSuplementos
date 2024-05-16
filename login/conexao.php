<<<<<<< HEAD
<?php

$servername = "localhost";
$username = "id22140339_zoosup";
$senha = "Zoouni9.";
$dbname = "id22140339_zoosuplementos";

$mysqli = new mysqli($servername, $username, $senha, $dbname);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

=======
<?php

$servername = "localhost";
$username = "yVini";
$senha = "Vinicius10";
$dbname = "myDB";

$mysqli = new mysqli($servername, $username, $senha, $dbname);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

>>>>>>> 3ea5cc93630696c6fde863abe38fc280143023de
?>