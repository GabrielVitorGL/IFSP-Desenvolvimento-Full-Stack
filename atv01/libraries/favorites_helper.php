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

if (isset($_POST['id_conteudo'])) {
    $id_conteudo = (int)$_POST['id_conteudo'];

    $check_favorito_sql = "SELECT id FROM conteudos_favoritos WHERE id_cliente = $user_id AND id_conteudo = $id_conteudo";
    $check_favorito_result = $conn->query($check_favorito_sql);

    if ($check_favorito_result->num_rows > 0) {
        $delete_favorito_sql = "DELETE FROM conteudos_favoritos WHERE id_cliente = $user_id AND id_conteudo = $id_conteudo";
        $conn->query($delete_favorito_sql);
    } else {
        $add_favorito_sql = "INSERT INTO conteudos_favoritos (id_cliente, id_conteudo) VALUES ($user_id, $id_conteudo)";
        $conn->query($add_favorito_sql);
    }
}

$conn->close();

header("Location: ../contents.php" . (isset($_GET['favoritos']) ? "?favoritos=true" : ""));
exit;
