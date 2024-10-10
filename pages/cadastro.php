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

                <?php

                echo $_POST['nome'] . ' ' . $_POST['sobrenome'] . '<br>';
                echo 'Nasceu em: ' . $_POST['nascimento'] . '<br>';
                echo 'CPF.: ' . $_POST['cpf'] . '<br>';
                echo 'RG.: ' . $_POST['rg'] . '<br>';
                echo 'Endereço.: ' . $_POST['endereco'] . '<br>';
                echo 'Cidade.: ' . $_POST['cidade'] . '<br>';
                echo 'Estado.: ' . $_POST['estado'] . '<br>';
                echo 'Telefone.: ' . $_POST['telefone'] . '<br>';
                ?>
                <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Obrigado por se cadastrar conosco!
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead mb-3"><b><?= $_POST['nome'] . ' ' . $_POST['sobrenome'] ?></b></h2>
                                    <p class="text-muted text-md mb-1"><b>Data de nascimento: </b> <?= date_format($_POST['nascimento'], "Y/m/d") ?> </p>
                                    <p class="text-muted text-md mb-1"><b>CPF: </b> <?= $_POST['cpf'] ?> </p>
                                    <p class="text-muted text-md"><b>RG: </b> <?= $_POST['rg'] ?> </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: <?= $_POST['endereco'] ?>, <?= $_POST['cidade'] ?>, <?= $_POST['estado'] ?></li>
                                        <li class="mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: <?= $_POST['telefone'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
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