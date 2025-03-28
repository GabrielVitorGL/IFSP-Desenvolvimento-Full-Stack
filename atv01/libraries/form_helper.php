<?php
include('database_helper.php');
$database = new Database();
$conn = $database->connect();

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM planos";
$result = $conn->query($sql);
$planos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $planos[] = $row;
    }
}

$conn->close();
