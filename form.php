<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Working with forms</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Enviando dados do formulário</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cadastro de Usuário</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="pages/cadastro.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome">
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Número do CPF">
                            </div>
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="Número do RG">
                            </div>
                            <div class="form-group">
                                <label for="nascimento">Nascimento</label>
                                <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Data de nascimento">
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="rua">Rua e Bairro</label>
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua rua e seu bairro">
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <script src="adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>