<?php
$m = [
  [1, 2, 3, 4, 5],
  [11, 12, 13, 14, 15],
  [21, 22, 23, 24, 25],
  [31, 32, 33, 34, 35],
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

$rs = [
  ['nome' => 'Maria', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
  ['nome' => 'João', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'masculino'],
  ['nome' => 'José', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'masculino'],
  ['nome' => 'Ana', 'sobrenome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
];

foreach ($rs as $pessoa) {
  echo 'Nome: ' . $pessoa['nome'] . ', idade: ' . $pessoa['idade'] . ', gênero: ' . $pessoa['genero'] . '<br>';
  echo '<br>';
}
