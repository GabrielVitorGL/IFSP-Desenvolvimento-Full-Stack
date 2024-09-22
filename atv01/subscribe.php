<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assinar - MAXIMUS</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="icon" href="img/logo.png">
</head>

<?php
$page_title = 'Assine agora e tenha acesso a todos os seus filmes e séries favoritos!';
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <?php include('includes/component/backtotop.php') ?>
    <div class="wrapper">
        <?php include('includes/component/navbar.php') ?>
        <?php include('includes/component/sidebar.php') ?>

        <div class="content-wrapper transparent-background">
            <?php include('includes/component/carrousel.php') ?>
            <?php include('includes/component/pagetitle.php') ?>
            <?php include('includes/component/form.php') ?>
        </div>

        <?php include('includes/component/footer.php') ?>
    </div>

    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>
    <script src="adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
</body>

</html>