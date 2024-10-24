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

<?php include('../libraries/list_helper.php') ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Lista de Usuários</h3>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $pessoa) : ?>
                    <tr>
                        <td><?= $pessoa['nome'] ?></td>
                        <td><?= $pessoa['sobrenome'] ?></td>
                        <td><?= $pessoa['cpf'] ?></td>
                        <td><?= $pessoa['rg'] ?></td>
                        <td><?= $pessoa['nascimento'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $pessoa['id'] ?>" class="mr-3"><i class="fas fa-edit mr-3 text-primary"></i></a>
                            <a href="exclusao.php?id=<?= $pessoa['id'] ?>"><i class="fas fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>

    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>