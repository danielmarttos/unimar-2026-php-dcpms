<?php

$fahrenheit = 98.9;
$temp = "";
//Converta uma temperatura de Fahrenheit para Celsius (C = (F − 32) × 5 / 9) e 
// classifique a sensação térmica: até 0°C congelando, 0 a 20°C frio, 20 a 30°C ameno, acima de 30°C quente.

$celsius = round((float)(($fahrenheit-32)*5/9),2);

if ($celsius < 0) {
    $temp = "congelando";
}
elseif ($celsius <= 20) {
    $temp = "frio";
}
elseif ($celsius <= 30) {
    $temp = "ameno";
}
else {
    $temp = "quente";
}

echo "O clima está $temp pois está ". "$celsius" . "° Celsius";