<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "full_stack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM endereco WHERE pessoa_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Exclusão do endereço efetuada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$sql = "DELETE FROM pessoa WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Exclusão da pessoa efetuada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exclusão da pessoa</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Pessoa excluída com sucesso!</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <a href="../form.php" class="btn btn-sm btn-primary">
                            <i class="fas fa-user mr-2"></i> Voltar para página de cadastro
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>