<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir dados cliente</title>
</head>

<body>




    <?php
    require_once "../factory/conexao.php";
    $conn = new Caminho;
    $id = $_GET['id'];
    $query = "select *from tbcliente where codcli = 
    :id";
    $resultado = $conn->getConn()->prepare($query);
    $resultado->bindParam(':id', $id, PDO::PARAM_INT);
    $resultado->execute();
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);


    ?>

    <form action="../model/alterarCli.php" method="post">
        Código: <br><input type="text" name="cxcodigo" value="<?php echo $linha['codcli']; ?>" readonly><br>
        Cliente: <br><input type="text" name="cxcliente" value="<?php echo $linha['cliente']; ?>"><br>
        CPF: <br><input type="text" name="cxcpf" value="<?php echo $linha['cpf']; ?>"><br>
        Código Vendedor: <br><input type="text" name="cxcodvendedor" value="<?php echo $linha['codvendedor']; ?>"><br>
        <input type="submit" value="Alterar" name="editar"><br>
    </form>

</body>

</html>