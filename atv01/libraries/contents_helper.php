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
    $page_title = "Área restrita";
    $error_message = "Essa área é restrita para usuários cadastrados. Por favor, cadastre-se ou faça login.";
} else {
    // Consultar todos os conteúdos
    $conteudos_sql = "SELECT * FROM conteudos";
    $conteudos_result = $conn->query($conteudos_sql);
    $conteudos = [];

    if ($conteudos_result->num_rows > 0) {
        while ($row = $conteudos_result->fetch_assoc()) {
            $conteudos[] = $row;
        }
    }

    // Consultar os conteúdos favoritos do usuário
    $favoritos_sql = "SELECT id_conteudo FROM conteudos_favoritos WHERE id_cliente = $user_id";
    $favoritos_result = $conn->query($favoritos_sql);
    $favoritos = [];

    if ($favoritos_result->num_rows > 0) {
        while ($row = $favoritos_result->fetch_assoc()) {
            $favoritos[] = $row['id_conteudo'];
        }
    }

    $page_title = "Conteúdos disponíveis";
}

$conn->close();
