<?php
include('libraries/success_helper.php');
include('libraries/subscribe_helper.php');


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscrição recebida! - MAXIMUS</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="icon" href="img/logo.png">
</head>



<body class="hold-transition sidebar-mini sidebar-collapse texture">
    <?php include('includes/component/backtotop.php') ?>
    <div class="wrapper">
        <?php include('includes/component/navbar.php') ?>
        <?php include('includes/component/sidebar.php') ?>

        <div class="content-wrapper transparent-background  align-items-center d-flex flex-column">
            <div class="container my-auto pb-5">
                <?php include('includes/component/pagetitle.php') ?>
                <div class="row  mt-5 d-flex align-items-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Inscrição recebida com sucesso!</h4>
                            <p>Parabéns, <?= $nome ?>! Sua inscrição foi recebida com sucesso.</p>
                            <p><strong>Email:</strong> <?= $email ?></p>
                            <p><strong>Telefone:</strong> <?= $telefone ?></p>
                            <p><strong>Data de Nascimento:</strong> <?= $dataNascimento ?></p>
                            <p><strong>Plano Escolhido:</strong> <?= $nomePlano ?></p>
                            <hr>
                            <p class="mb-0">Clique <a href="index.php" class="">aqui</a> para voltar à página inicial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('includes/component/footer.php') ?>
    </div>

    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>