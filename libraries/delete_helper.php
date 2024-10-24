<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "full_stack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM endereco WHERE pessoa_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Exclusão do endereço efetuada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$sql = "DELETE FROM pessoa WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Exclusão da pessoa efetuada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();

// redirect to list.php
header("Location: ../pages/list.php");