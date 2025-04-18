<?php
    require_once "../factory/conexao.php";
    
    if($_POST['cxcliente'] != ""){
       $conn = new Caminho;
       $query = "insert into tbcliente
       (cliente,cpf,codvendedor)
       values
       (:nome,:cpf,:codvendedor)"; 

       $cadastrar=$conn->getConn()->
       prepare($query);
       
       $cadastrar->
       bindParam(':nome',$_POST['cxcliente'],
       PDO::PARAM_STR);

       $cadastrar->
       bindParam(':cpf',$_POST['cxcpf'],
       PDO::PARAM_INT);
       
       $cadastrar->
       bindParam(':codvendedor',$_POST['cxcodvendedor'],
       PDO::PARAM_INT);
       
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