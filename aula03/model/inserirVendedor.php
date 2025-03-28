<?php
require_once '../factory/conexao.php';

function alertAndRedirect($message)
{
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='../view/cadvendedor.php';</script>";
}

if (isset($_POST['cxvendedor'])) {
    $vendedor = $_POST['cxvendedor'];
    $sql = "INSERT INTO tb
    vendedor (nome) VALUES (:nome)";
    $stmt = Caminho::getConn()->prepare($sql);
    $stmt->bindParam(':nome', $vendedor);

    if ($stmt->execute()) {
        alertAndRedirect('Vendedor cadastrado com sucesso!');
    } else {
        alertAndRedirect('Erro ao cadastrar vendedor.');
    }
} else {
    alertAndRedirect('Preencha todos os campos!');
}
