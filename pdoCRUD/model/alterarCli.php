<?php
require_once "../factory/conexao.php";
$conn = new Caminho;
if (isset($_POST['editar'])) {
    $query = "UPDATE tbcliente SET 
    cliente = :cliente, 
    cpf = :cpf, 
    codvendedor = :codvendedor 
    WHERE codcli = :codcli";
    $resultado = $conn->getConn()->prepare($query);
    $resultado->bindParam(':cliente', $_POST['cxcliente'], PDO::PARAM_STR);
    $resultado->bindParam(':cpf', $_POST['cxcpf'], PDO::PARAM_STR);
    $resultado->bindParam(':codvendedor', $_POST['cxcodvendedor'], PDO::PARAM_INT);

    $resultado->bindParam(':codcli', $_POST['cxcodigo'], PDO::PARAM_INT);
    if ($resultado->execute()) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente.";
    }
} else {
    echo "Erro ao atualizar cliente";
}
