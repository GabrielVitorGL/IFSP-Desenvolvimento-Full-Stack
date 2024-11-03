<?php

$nome = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['phone']);
$dataNascimento = htmlspecialchars($_POST['birth']);
$id_plano = (int)str_replace('plan', '', $_POST['plan']);

// pegar nome do plano no banco

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'maximus';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT nome FROM planos WHERE id = $id_plano";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $plano = $row['nome'];
} else {
    $plano = 'Plano não encontrado';
}

$conn->close();
