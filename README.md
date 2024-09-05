# PHP

# **Anotações de aula**
<br/>

# Aula 1

## Instalar servidor:
* Baixar e instalar o XAMPP
* Abrir XAMPP e iniciar o serviço do Apache

## Criar site local:
* Acessar o diretório htdocs dentro da pasta da instalação do XAMPP
* Criar uma pasta com o nome do projeto

## Estrutura do projeto:
* index.php
* adminlte/
* assets/
* includes/
* libraries/
* pages/
* sql/

## Baixar o AdminLTE:
* Baixar o Admin LTE
* Mover arquivos para a pasta adminlte na pasta do projeto

## Componentes
você pode criar componentes de trechos de códigos utilizando diferentes arquivos .php na pasta /includes/component

depois de segmentar o código desejado, você poderá importá-lo da seguinte forma:

```
<?php include('./includes/component/nome_do_componente.php') ?>
```

<br/><br/>
# Aula 2

## Variáveis
`<?php echo ?>`    forma resumida:   `<?= ?>`
a
### Declaração

topo do arquivo:
```
<?php
  $variavel = 'Valor da variavel';
?>
```

### Utilização das variáveis

```
<?= $variavel ?> 
```
ou 
```
<?php echo $variavel ?>
```

## Arrays

```
$a1 = []
$a2 = [1]
$a3 = ['Dashboard', 'Clientes', 'Vendas', 'Contas'];
```

## For Loop

```
<?php for ($i = 0; $i < count($menu_items); $i++) : ?>
    ...código HTML desejado para repitir...
<?php endfor ?>
```

## Count

```
$array = [0, 1];

count($array); // 2
```

## Rand

gera um número aleatório
```
rand();
```

para gerar um número entre dois valores (5 e 15, por exemplo):
```
rand(5, 15);
```

## Bibliotecas

você pode criar uma biblioteca criando um arquivo nome.php na pasta libraries
após isso você poderá importá-lo em seu index ou em outro componente usando:

```
<?php include('./libraries/nome.php') ?>
```
**Lembre-se de importar antes do momento da utilização das variáveis, pois a ordem impactará no escopo em que essas variáveis estarão disponíveis* 

<br/><br/>
# Aula 3


<br/><br/>

## Concatenar strings no echo
Operador de concatenação: `.` (ponto)
```
$teste = 'conteudo da variavel'
echo 'Essa string será concatenada com a variável teste: '.$teste.'<br>';
```
### Concatenação com interpolação
Utilizando aspas duplas (`""`), é possível utilizar variáveis normalmente dentro de uma string
```
$soma = 1 + 3;
echo "A soma dos elementos é: $soma <br><br>";
```

## Array associativo
```
$pessoa = ['nome' => 'Maria', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'];

echo 'Dados da '.$pessoa['nome'].'<br';
foreach ($pessoa as $key => $value) {
  echo "$key => $value<br>";
}
```

## Matriz indexada
```
$m = [
  [1,2,3,4,5],
  [11,12,13,14,15],
  [21,22,23,24,25],
  [31,32,33,34,35],
];

foreach ($m as $row) {
  // PRINTAR MATRIZ: 
    // printa na tela automaticamente:
    // print_r($row).'<br><br>'; 
  
    // passando o argumento true a função print_r retorna uma string e nós temos que cuidar da exibição:
    // echo print_r($row, true).'<br><br>'; 

  foreach ($row as $item) {
    echo "$item - ";
  }
  echo '<br>';
}
```

## Matriz associativa
```
$rs = [
  ['nome' => 'Maria', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
  ['nome' => 'João', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'masculino'],
  ['nome' => 'José', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'masculino'],
  ['nome' => 'Ana', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
];

foreach ($rs as $pessoa) {
  echo 'Nome: '.$pessoa['nome'].', idade: '.$pessoa['idade'].', gênero: '.$pessoa['genero'].'<br>';
  echo '<br>';
}
```

