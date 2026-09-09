<?php

$p1 = 9.5;
$p2 = 7.0;
$p3 = 5.5;

//Calcule a média de 3 notas e defina a situação: média ≥ 7 aprovado, entre 5 e 7 recuperação, abaixo de 5 reprovado.
//Calcular a média das 3 notas
//Aplicar if/elseif/else para definir a situação
//Imprimir a média (2 casas decimais) e a situação junto
//Testar um caso de cada situação, incluindo a médiaexatamente 7 e exatamente 5

$media = round(($p1+$p2+$p3)/3,2);
$situacao = "";

if ($media < 5) {
    $situacao = "Reprovado";
}
elseif ($media <= 7) {
    $situacao = "Recuperação";
}
else {
    $situacao = "Aprovado";
}

echo "Sua média é de $media, sua situação é $situacao";