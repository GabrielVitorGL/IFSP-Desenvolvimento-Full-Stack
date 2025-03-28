<?php
include('database_helper.php');
session_start();

$database = new Database();
$conn = $database->connect();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$favoritos_filter = isset($_GET['favoritos']) && $_GET['favoritos'] === 'true';
$page_title = "Conteúdos Disponíveis";

if (!$user_id) {
    $page_title = "Área restrita";
    $error_message = "Essa área é restrita para usuários cadastrados. Por favor, cadastre-se";
} else {
    $conteudos_sql = "SELECT * FROM conteudos";

    if ($favoritos_filter) {
        $conteudos_sql .= " WHERE id IN (SELECT id_conteudo FROM conteudos_favoritos WHERE id_cliente = $user_id)";
        $page_title = "Conteúdos Favoritos";
    }

    $conteudos_result = $conn->query($conteudos_sql);
    $conteudos = [];

    if ($conteudos_result->num_rows > 0) {
        while ($row = $conteudos_result->fetch_assoc()) {
            $conteudos[] = $row;
        }
    }

    $favoritos_sql = "SELECT id_conteudo FROM conteudos_favoritos WHERE id_cliente = $user_id";
    $favoritos_result = $conn->query($favoritos_sql);
    $favoritos = [];

    if ($favoritos_result->num_rows > 0) {
        while ($row = $favoritos_result->fetch_assoc()) {
            $favoritos[] = $row['id_conteudo'];
        }
    }
}

$conn->close();
