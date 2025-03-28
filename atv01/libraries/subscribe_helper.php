<?php
$database = new Database();
$conn = $database->connect();

$nome = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$telefone = $conn->real_escape_string($_POST['phone']);
$data_nascimento = $conn->real_escape_string($_POST['birth']);
$id_plano = (int)str_replace('plan', '', $_POST['plan']);
$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
$subscribe_ok = true;

$sql = "INSERT INTO clientes (nome, email, telefone, data_nascimento, id_plano, senha_criptografada)
VALUES ('$nome', '$email', '$telefone', '$data_nascimento', '$id_plano', '$senha')";

try {
    $conn->query($sql);
    $subscribe_ok = true;
    $page_title = 'Inscrição recebida com sucesso!';

    $user_id = $conn->insert_id;

    session_start();
    $_SESSION['user_id'] = $user_id;
} catch (Exception $e) {
    $subscribe_ok = false;
    $page_title = 'Erro ao efetuar inscrição';

    $error_message = $e->getMessage();
}

$conn->close();
