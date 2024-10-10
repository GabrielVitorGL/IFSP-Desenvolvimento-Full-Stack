<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Condominus</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('./libraries/aula02.php') ?>
        <?php include('./includes/component/navbar.php') ?>
        <?php include('./includes/component/sidebar.php') ?>

        <div class="content-wrapper">
            <?php include('./includes/component/breadcrumb.php') ?>
            <?php include('./includes/component/maincontent.php') ?>
            <?php include('./includes/component/form.php') ?>
        </div>

        <?php include('./includes/component/footer.php') ?>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <script src="./adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="./adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./adminlte/dist/js/adminlte.min.js"></script>
    <script src="./adminlte/dist/js/demo.js"></script>
</body>

</html>