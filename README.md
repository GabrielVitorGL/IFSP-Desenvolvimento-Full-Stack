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