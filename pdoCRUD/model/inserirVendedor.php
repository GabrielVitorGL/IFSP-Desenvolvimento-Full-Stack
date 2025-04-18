<?php
    require_once "../factory/conexao.php";
    if($_POST['cxvendedor'] != ""){
       $conn = new Caminho;
       $query = "insert into tbvendedor
       (vendedor)
       values
       (:nome)"; 

       $cadastrar=$conn->getConn()->
       prepare($query);
       
       $cadastrar->
       bindParam(':nome',$_POST['cxvendedor'],
       PDO::PARAM_STR);

       $cadastrar->execute();
       
       if($cadastrar->rowcount()){
           echo "Cadastrado com sucesso!";
       }else{
           echo "Dados não cadastrado";
       }
    }else{
        echo "Dados incompleto";
    }
?>