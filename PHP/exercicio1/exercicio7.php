<?php

$vendas = [
 "seg" => 1200,
 "ter" => 950,
 "qua" => 1800,
 "qui" => 700,
 "sex" => 2100,
];

//Dado um array associativo dia => valor, encontre o dia da maior e da menor venda.
//Usar foreach com $chave => $valor (não só $valor)
//Guardar o dia (chave), não só o valor, do maior e do menor
//Imprimir algo como "Maior venda: sex (2100)"
//Testar com um array onde o maior valor é o primeiro do array

$maiorv = 0;
$maiord = "";

foreach ($vendas as $chave => $valor) {

    if ($valor > $maiorv) {
        $maiord = $chave;
        $maiorv = $valor;
    }

}

echo "A maior venda foi $maiord de R$$maiorv";