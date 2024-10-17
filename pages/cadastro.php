<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "full_stack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO pessoa (nome, sobrenome, nascimento, cpf, rg)
VALUES ('$nome', '$sobrenome', '$nascimento', '$cpf', '$rg')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro da pessoa efetuado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$pessoa_id = $conn->insert_id;

$sql = "INSERT INTO endereco (pessoa_id, rua, cidade, estado)
VALUES ('$pessoa_id', '$rua', '$cidade', '$estado')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro do endereço efetuado com sucesso!";
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
    <title>Working with forms</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Cadastro efetuado com sucesso!</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Obrigado por se cadastrar conosco!
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead mb-3"><b><?= $nome . ' ' . $sobrenome ?></b></h2>
                                    <p class="text-muted text-md mb-1"><b>Data de nascimento: </b> <?= date("d/m/Y", strtotime($nascimento)) ?> </p>
                                    <p class="text-muted text-md mb-1"><b>CPF: </b> <?= $cpf ?> </p>
                                    <p class="text-muted text-md"><b>RG: </b> <?= $rg ?> </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: <?= $rua . ', ' . $cidade . ' - ' . $estado ?></li>
                                        <li class="mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: <?= $_POST['telefone'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="175" height="175" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="../form.php" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user mr-2"></i> Voltar para página de cadastro
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>