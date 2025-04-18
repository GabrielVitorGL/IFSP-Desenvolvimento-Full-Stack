<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>
<body>
<fieldset>    
<form action="../model/buscaNome.php" 
method="POST">
    Digite o nome competo:<br/>
    <input type="text" name="cxbusca"/>
    <input type="submit" value="Buscar">
</form>    
</fieldset>

<form action="../model/inserirCliente.php"
     method="POST">
       Cliente<br/>
       <input type="text" 
       name="cxcliente"/><br/>
       
       CPF<br/>
       <input type="text" 
       name="cxcpf"/><br/>

       Código do vendedor<br/>
       <input type="text" 
       name="cxcodvendedor"/><br/>

      
       <input type="submit" 
       value="Gravar"/>
    </form>    




</body>
</html>