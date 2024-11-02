<?php

var_dump($_POST);

$page_title = 'Inscrição recebida com sucesso!';

$nome = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['phone']);
$dataNascimento = htmlspecialchars($_POST['birth']);
$idPlano = 999;
