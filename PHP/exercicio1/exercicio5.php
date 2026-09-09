<?php

$notas = [7.5, 9.0, 4.5, 6.0, 8.5];

//Percorra um array de notas com foreach e calcule soma, média, maior e menor valor — em uma única passagem
//Um único foreach calculando soma, maior e menor ao mesmo tempo
//Usar count() para achar a quantidade de elementos
//Imprimir soma, média, maior e menor no final
//Testar trocando os valores do array, inclusive com números repetidos

$total = 0;
$maior = 0;
$menor = 9999;
$num = count($notas);

foreach ($notas as $nota) {

    $total += $nota;
    $media = $total/$num;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

echo "Sua maior nota é $maior, sua menor nota é $menor.";
echo "<br>";
echo "Sua nota total é de $total, e sua média é de $media";