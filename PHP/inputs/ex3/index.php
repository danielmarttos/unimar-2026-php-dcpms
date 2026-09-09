<?php

include('classes.php');

echo "Digite seu nome: ";
$nome = fgets(STDIN);
$nome = trim($nome);

echo "Digite sua idade: ";
$idade = fgets(STDIN);

$pessoa1 = new Pessoa($nome, $idade);

echo "Seu nome é " . $pessoa1->getNome() . PHP_EOL;
echo "Sua idade é de " . $pessoa1->getIdade() . " anos";