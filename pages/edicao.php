<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "full_stack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['pessoa']['nome'];
$sobrenome = $_POST['pessoa']['sobrenome'];
$nascimento = $_POST['pessoa']['nascimento'];
$cpf = $_POST['pessoa']['cpf'];
$rg = $_POST['pessoa']['rg'];
$id = $_POST['pessoa']['id'];

$rua = $_POST['endereco']['rua'];
$cidade = $_POST['endereco']['cidade'];
$estado = $_POST['endereco']['estado'];

$sql = "UPDATE pessoa SET nome='$nome', sobrenome='$sobrenome', nascimento='$nascimento', cpf='$cpf', rg='$rg' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Edição da pessoa efetuada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$sql = "UPDATE endereco SET rua='$rua', cidade='$cidade', estado='$estado' WHERE pessoa_id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Edição do endereço efetuada com sucesso!";
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
    <title>Edição da pessoa</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Edição efetuada com sucesso!</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Obrigado por se atualizar seu cadastro conosco!
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