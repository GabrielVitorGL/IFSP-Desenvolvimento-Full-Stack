<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maximus";

$page_title = "Perfil";

$nome = '';
$email = '';
$telefone = '';
$data_nascimento = '';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$user_id) {
    header("Location: form_page.php");
    exit;
}

$sql = "SELECT nome, email, telefone, data_nascimento FROM clientes WHERE id = $user_id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();

if ($cliente) {
    $nome = $cliente['nome'];
    $email = $cliente['email'];
    $telefone = $cliente['telefone'];
    $data_nascimento = $cliente['data_nascimento'];
}

$conn->close();
