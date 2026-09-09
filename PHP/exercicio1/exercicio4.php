<?php

$numero = 7;

//Gere a tabuada de um número, de 1 a 10, usando foreach sobre range(). Cada linha no formato "N x i = resultado".
//Usar foreach com range(1, 10) — não usar 10 linhas de código repetidas
//Imprimir as 10 linhas no formato "N x i = resultado"
//Trocar o valor de $numero e confirmar que a tabuada muda toda
//Bônus: pular a linha "x 1" com if dentro do foreach


echo "Tabuada: ";
echo "<br>";
echo "<br>";
foreach (range(1, 10) as $num) {

if ($num != 1) {

    echo "7 x $num = " . ($numero*$num);
    echo "<br>";   
    }
}