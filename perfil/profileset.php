<<<<<<< HEAD
<?php


session_start();

// Verifica se o token de usuário está definido na sessão
if (isset($_SESSION['token'])) {
    $idUser = $_SESSION['token'];
} else {
    // Se o token não estiver definido, defina $idUser como vazio
    $idUser = '';
}



$servername = "localhost";
$username = "yVini";
$senha = "Vinicius10";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $senha, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM supusers WHERE id = $idUser";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Se houver resultados, atribua os valores às variáveis ​​PHP
  $row = $result->fetch_assoc();
  $id = $row["id"];
  $nome = $row["nome"];
  $idade = $row["idade"];
  $cpf = $row["cpf"];
  $telefone = $row["telefone"];
  $email = $row["email"];
  $senhaUsuario = $row["senha"];
  $data = $row["reg_date"];
} else {
  echo "Nenhum usuário encontrado.";
}

=======
<?php


session_start();

// Verifica se o token de usuário está definido na sessão
if (isset($_SESSION['token'])) {
    $idUser = $_SESSION['token'];
} else {
    // Se o token não estiver definido, defina $idUser como vazio
    $idUser = '';
}



$servername = "localhost";
$username = "yVini";
$senha = "Vinicius10";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $senha, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM supusers WHERE id = $idUser";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Se houver resultados, atribua os valores às variáveis ​​PHP
  $row = $result->fetch_assoc();
  $id = $row["id"];
  $nome = $row["nome"];
  $idade = $row["idade"];
  $cpf = $row["cpf"];
  $telefone = $row["telefone"];
  $email = $row["email"];
  $senhaUsuario = $row["senha"];
  $data = $row["reg_date"];
} else {
  echo "Nenhum usuário encontrado.";
}

>>>>>>> 3ea5cc93630696c6fde863abe38fc280143023de
?>