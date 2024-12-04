<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maximus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$user_id) {
    header("Location: ../form_page.php");
    exit;
}

$conn->begin_transaction();

try {
    $sql = "DELETE FROM conteudos_favoritos WHERE id_cliente = $user_id";
    if (!$conn->query($sql)) {
        throw new Exception("Erro ao remover conteúdos favoritos: " . $conn->error);
    }

    $sql = "DELETE FROM conteudos_assistidos WHERE id_cliente = $user_id";
    if (!$conn->query($sql)) {
        throw new Exception("Erro ao remover conteúdos assistidos: " . $conn->error);
    }

    $sql = "DELETE FROM clientes WHERE id = $user_id";
    if (!$conn->query($sql)) {
        throw new Exception("Erro ao remover cliente: " . $conn->error);
    }

    $conn->commit();

    session_unset();
    session_destroy();

    header("Location: ../form_page.php?msg=" . urlencode("Conta excluída com sucesso."));
    exit;
} catch (Exception $e) {
    $conn->rollback();
    header("Location: ../profile.php?msg=" . urlencode("Erro ao excluir a conta."));
    exit;
}

$conn->close();