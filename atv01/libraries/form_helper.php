<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maximus";

$conn = new mysqli($servername, $username, $password, $dbname);

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
