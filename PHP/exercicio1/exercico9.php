<?php

$notas = [
 [8.0, 7.5, 9.0],
 [6.0, 5.5, 7.0],
 [9.5, 8.0, 9.0],
];

// Trabalhe com uma lista de listas — cada posição guarda o array de notas de um aluno. Adicione um novo aluno, acesse uma nota específica e percorra tudo com foreach aninhado

// Usar array_push para adicionar um novo aluno (um array de notas) à lista
// Acessar e imprimir uma nota específica via dois índices, ex: $notas[0][1]
// Usar foreach aninhado (um foreach dentro do outro) para percorrer todos os alunos e notas
// Calcular e imprimir a média de cada aluno dentro do laço
// Testar com pelo menos 4 alunos na lista após o array_push

array_push($notas, [6.7, 6.9, 2.4]);

print_r($notas);
echo "<br>";
echo "<br>";
print_r($notas[0][1]);
echo "<br>";
echo "<br>";

$media = 0;
$total = 0;
$num = 0;
$conta = 1;

foreach ($notas as $alunos) {
    foreach ($alunos as $nota) {

        $total+=$nota;
        $num = count($alunos);
        $media = round($total/$num, 2);
        
    }

        echo "Média do $conta" . "º aluno é de: " . $media;
        echo "<br>";
        $conta += 1;
        $media = 0;
        $total = 0;
        $num = 0;

}



