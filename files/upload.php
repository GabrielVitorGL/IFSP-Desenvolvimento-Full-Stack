<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Working with forms</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <h2 class="text-center my-5">Uploads são uma merda!</h2>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload de arquivos</h3>
                    </div>
                    <div class="card-body">
                        <form action="savefile.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="file">Selecione uma imagem para fazer upload</label>
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>

        </div>

        <script src="adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="adminlte/dist/js/adminlte.min.js"></script>
        <script src="adminlte/dist/js/demo.js"></script>
</body>

</html>