<?php include('libraries/recent_helper.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionados recentemente</title>
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
            <div class="container my-auto py-5 align-items-center d-flex flex-column">
                <h1>Conteúdos Recentes no MAXIMUS</h1>
                <div class="row justify-content-start w-100 py-5">
                    <p>Confira abaixo os conteúdos mais recentes adicionados ao catálogo do <strong>MAXIMUS</strong>!</p>
                    <p>Lembre-se de checar toda semana, já que novos conteúdos são adicionados regularmente em nossa plataforma!</p>
                </div>
                <ul>
                    <?php if (!empty($recentContent)): ?>
                        <?php foreach ($recentContent as $content): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center transparent-background">
                                <div>
                                    <strong><?php echo htmlspecialchars($content['nome']); ?></strong>
                                    (<?php echo htmlspecialchars($content['tipo']); ?>) -
                                    <?php echo htmlspecialchars($content['sinopse']); ?>
                                </div>
                                <img src="<?php echo htmlspecialchars($content['imagem_url']); ?>" alt="Imagem de <?php echo htmlspecialchars($content['nome']); ?>" style="max-width: 200px;">

                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>Nenhum conteúdo disponível no momento.</li>
                    <?php endif; ?>
                </ul>

                <div class="row justify-content-center mt-5 d-flex flex-column">
                    <h2>Assine agora e tenha acesso a todos os conteúdos!</h2>
                    <p class="mt-5">
                        Assine a <strong>MAXIMUS</strong> e tenha acesso a todos os seus conteúdos favoritos em um só lugar!
                    </p>
                    <a href="form_page.php" class="btn btn-primary btn-lg rounded-pill mt-2">Assine agora!</a>
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