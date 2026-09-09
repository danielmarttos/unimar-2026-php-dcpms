<?php

$numeros = [3, 8, 15, 22, 9, 40, 7];
$pares = [];
$impares = [];

//Percorra um array de números e monte um novo array só com os valores pares, usando array_push
//Usar o operador % para detectar número par
//Montar o array $pares só com array_push (nada de array_filter ainda)
//Imprimir o array final com print_r()
//Bônus: monte também um array $impares no mesmo foreach

foreach ($numeros as $numero) {

    if ($numero % 2 == 0) {
        array_push($pares, $numero);
    }
    else {
        array_push($impares, $numero);
    }

}

print_r($pares);
print_r($impares);