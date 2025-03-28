<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendedor</title>
</head>

<body>
    <form action="../model/inserirVendedor.php" method="POST">
        <h1>Cadastro de Vendedor</h1>
        Vendedor <br />
        <input type="text" name="cxvendedor" placeholder="Nome do vendedor" required />
        <input type="submit" value="Cadastrar" />
    </form>
</body>

</html>