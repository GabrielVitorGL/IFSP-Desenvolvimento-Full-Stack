<?php

$texto = file_get_contents('../docs/01.txt');

$token = strtok($texto, " ");

while ($token !== false) {
    $tamanho = strlen($token);
    if (isset($contagem[$tamanho])) {
        $contagem[$tamanho]++;
    } else {
        $contagem[$tamanho] = 1;
    }
    $token = strtok(" ");
}

echo '<br><br>Contagem de palavras por tamanho<br>';
print_r($contagem);

//ordenar o array de contagem de palavras por tamanho
ksort($contagem);
echo '<br><br>Contagem de palavras por tamanho ordenada<br>';
print_r($contagem);
