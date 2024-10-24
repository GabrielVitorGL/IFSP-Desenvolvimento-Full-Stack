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
$sql = "SELECT * FROM pessoa, endereco WHERE pessoa.id = endereco.pessoa_id AND pessoa.id = $id";

$result = $conn->query($sql);
$pessoa = $result->fetch_assoc();
//console log pessoa
echo "<script>console.log('Pessoa: " . $pessoa['nome'] . " " . $pessoa['sobrenome'] . "');</script>";
