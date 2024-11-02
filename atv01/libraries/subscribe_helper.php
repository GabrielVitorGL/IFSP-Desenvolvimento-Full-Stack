<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maximus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$telefone = $conn->real_escape_string($_POST['phone']);
$data_nascimento = $conn->real_escape_string($_POST['birth']);
$id_plano = (int)str_replace('plan', '', $_POST['plan']);
$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $telefone = $_POST['phone'];
    $nascimento = $_POST['birth'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $plano = $_POST['plan'];

    // Processa e salva os dados no banco de dados.
    echo "Nome: $nome <br> Telefone: $telefone <br> Nascimento: $nascimento <br> Email: $email <br>";
} else {
    echo "O formulário não foi enviado corretamente.";
}

$sql = "INSERT INTO clientes (nome, email, telefone, data_nascimento, id_plano, senha_criptografada)
VALUES ('$nome', '$email', '$telefone', '$data_nascimento', '$id_plano', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro efetuado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
