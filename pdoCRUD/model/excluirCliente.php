<?php
        require_once "../factory/conexao.php";
        $id=$_GET["id"];
        $conn = new Caminho;
        $pastel = "delete from tbcliente 
        where codcli = :id";
        $resultado = $conn->getconn()->
        prepare($query);
        $resultado->bindParam(':id',$id);
        if($resultado->execute()){
            echo "
            <script>
                alert('Cliente excluido com sucesso');
                window.location.
                href='../view/cadcliente.php';
            </script>
            ";
        }else{
             echo "
                 <script>
                 alert('Cliente não excluido');
                 window.location.
                 href='../view/cadcliente.php';
                 </script>
             ";
        }


?>