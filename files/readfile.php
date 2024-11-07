<?php

$v = file('../docs/01.txt');
// print_r($v);

$aux = [];
foreach ($v as $row) {
    $row = trim($row);
    if (strlen($row) > 0) {
        $aux[] = $row;
    }
}

echo 'Conteúdo do arquivo inserido em um array<br>';
print_r($aux);

$texto = implode(' ', $aux);
echo '<br><br>Conteúdo do arquivo inserido em uma string<br>';
echo $texto;

//conte no texto utilizado para leitura de arquivos quantas palavras com
//um caractere, depois com dois caracteres, com três caracteres e assim por diante

$palavras = explode(' ', $texto);
// print_r($palavras);

$contagem = [];
foreach ($palavras as $palavra) {
    $tamanho = strlen($palavra);
    if (isset($contagem[$tamanho])) {
        $contagem[$tamanho]++;
    } else {
        $contagem[$tamanho] = 1;
    }
}

echo '<br><br>Contagem de palavras por tamanho<br>';
print_r($contagem);

//ordenar o array de contagem de palavras por tamanho
ksort($contagem);
echo '<br><br>Contagem de palavras por tamanho ordenada<br>';
print_r($contagem);
