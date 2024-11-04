<?php include('libraries/contents_helper.php'); ?>

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
                <?php if (isset($error_message)): ?>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Acesso restrito</h4>
                        <p><?php echo $error_message; ?></p>
                        <a href="form_page.php" class="btn btn-primary">Ir para a página de cadastro</a>
                    </div>
                <?php else: ?>
                    <h1 class="mt-5"><?php echo $page_title; ?></h1>
                    <div class="row mt-5">
                        <?php foreach ($conteudos as $conteudo): ?>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="<?php echo htmlspecialchars($conteudo['imagem_url']); ?>" class="card-img-top" alt="Imagem de <?php echo htmlspecialchars($conteudo['nome']); ?>">
                                    <div class="card-body text-dark">
                                        <h5><?php echo htmlspecialchars($conteudo['nome']); ?></h5>
                                        <button class="btn btn-link p-0 text-dark mb-3" type="button" data-toggle="collapse" data-target="#collapse<?php echo $conteudo['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $conteudo['id']; ?>">
                                            Descrição <i class="ml-1 fas fa-angle-down"></i>
                                        </button>
                                        <p style="font-size: 13px;" class="collapse" id="collapse<?php echo $conteudo['id']; ?>"><?php echo htmlspecialchars($conteudo['sinopse']); ?></p>
                                        <p><strong>Ano:</strong> <?php echo htmlspecialchars($conteudo['ano_lancamento']); ?></p>
                                        <p><strong>Tipo:</strong> <?php echo ucwords(htmlspecialchars($conteudo['tipo'])); ?></p>
                                        <?php if ($conteudo['tipo'] === 'filme'): ?>
                                            <p><strong>Duração:</strong> <?php echo htmlspecialchars($conteudo['duracao_minutos']); ?> min</p>
                                        <?php endif; ?>
                                        <p><strong>Classificação:</strong> <?php echo htmlspecialchars($conteudo['classificacao']); ?></p>

                                        <?php if (in_array($conteudo['id'], $favoritos)): ?>
                                            <form action=<?php echo htmlspecialchars("libraries/favorites_helper.php" . ($favoritos_filter ? "?favoritos=true" : "")); ?> method="post">
                                                <button class="btn btn-danger" disabled>Favoritado</button>
                                                <input type="hidden" name="id_conteudo" value="<?php echo $conteudo['id']; ?>">
                                                <button type="submit" class="btn btn-primary">Remover dos favoritos</button>
                                            </form>
                                        <?php else: ?>
                                            <form action="libraries/favorites_helper.php" method="post">
                                                <input type="hidden" name="id_conteudo" value="<?php echo $conteudo['id']; ?>">
                                                <button type="submit" class="btn btn-primary">Favoritar</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php if (count($conteudos) === 0): ?>
                            <div class="alert alert-warning" role="alert">
                                <?php if ($favoritos_filter): ?>
                                    <h4 class="alert-heading">Nenhum conteúdo favoritado</h4>
                                    <p>Você ainda não favoritou nenhum conteúdo. <a href="contents.php">Clique aqui</a> para ver os conteúdos disponíveis.</p>
                                <?php else: ?>
                                    <h4 class="alert-heading">Nenhum conteúdo disponível</h4>
                                    <p>Não há conteúdos disponíveis no momento. Por favor, tente novamente mais tarde.</p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php include('includes/component/footer.php') ?>
    </div>

    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>