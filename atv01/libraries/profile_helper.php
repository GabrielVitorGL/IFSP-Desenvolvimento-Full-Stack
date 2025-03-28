<?php
include('database_helper.php');
session_start();

$database = new Database();
$conn = $database->connect();

$page_title = "Perfil";

$nome = '';
$email = '';
$telefone = '';
$data_nascimento = '';

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
