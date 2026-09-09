<?php

$idade = 99;
$faixa = '';
//0–12 criança, 13–17 adolescente, 18–59 adulto, 60+ idoso.

if ($idade <= 12) {
    $faixa = 'criança';
}
elseif ($idade <= 17) {
    $faixa = 'adolescente';
}
elseif ($idade <= 59) {
    $faixa = 'adulto';
}
else {
     $faixa = 'idoso';
}

echo "Você tem $idade anos. Você é um(a) $faixa.";