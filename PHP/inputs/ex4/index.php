<?php

$num1 = (float) $argv[1];
$num2 = (float) $argv[2];
$op = $argv[3];
$resul = 0;
$log = '';

if ($argc != 4) {

    $log .= "NENHUM INPUT RECONHECIDO" . PHP_EOL;

} else {

    if (is_float($num1)) {

        if (is_float($num2)) {

            if ($op == '+') {
                $resul = $num1+$num2;
            } 
            elseif ($op == '-') {
                $resul = $num1-$num2;
            }
            elseif ($op == 'x' or $op == '*') {
                $resul = $num1*$num2;
            }
            elseif ($op == '/') {
                $resul = $num1/$num2;
            } else {
                $log .= ' Operador desconhecido ';
            }
        } else {
            $log .= " Segundo número inválido ";
        }
    } else {
        $log .= " Primeiro número inválido ";
    }

    echo PHP_EOL . "Resultado: $resul";

}

echo $log;