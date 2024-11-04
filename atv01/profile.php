<?php include('libraries/profile_helper.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
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

    <div class="wrapper">
        <?php include('includes/component/navbar.php') ?>
        <?php include('includes/component/sidebar.php') ?>
        <div class="content-wrapper transparent-background align-items-center d-flex flex-column">
            <div class="container my-auto pb-5">
                <?php if (isset($_GET['msg'])): ?>
                    <div class="alert alert-info">
                        <?= htmlspecialchars($_GET['msg']) ?>
                    </div>
                <?php endif; ?>
                <h1 class="mb-5">Minha conta</h1>
                <form action="libraries/update_profile_helper.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?= htmlspecialchars($nome) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" value="<?= htmlspecialchars($telefone) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="<?= htmlspecialchars($data_nascimento) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Nova Senha (deixe em branco se não quiser alterar):</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Atualizar Dados</button>
                    <button type="button" class="btn btn-danger mt-3 ml-auto" data-toggle="modal" data-target="#confirmDeleteModal">Excluir Conta</button>
                </form>


            </div>
        </div>
        <?php include('includes/component/footer.php') ?>
    </div>

    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteLabel">Confirmar Exclusão de Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja excluir sua conta? Esta ação é irreversível.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a href="libraries/delete_user_helper.php" class="btn btn-danger">Excluir Conta</a>
                </div>
            </div>
        </div>
    </div>

    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>