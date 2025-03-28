<?php
include('database_helper.php');
session_start();

$database = new Database();
$conn = $database->connect();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$user_id) {
    header("Location: ../form_page.php");
    exit;
}

$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$telefone = $conn->real_escape_string($_POST['telefone']);
$data_nascimento = $conn->real_escape_string($_POST['data_nascimento']);
$senha = !empty($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : null;

if ($senha) {
    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone', data_nascimento = '$data_nascimento', senha_criptografada = '$senha' WHERE id = '$user_id'";
} else {
    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone', data_nascimento = '$data_nascimento' WHERE id = '$user_id'";
}

if ($conn->query($sql) === TRUE) {
    $msg = "Perfil atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar perfil: " . $conn->error;
}

$conn->close();

header("Location: ../profile.php?msg=" . urlencode($msg));
exit;
