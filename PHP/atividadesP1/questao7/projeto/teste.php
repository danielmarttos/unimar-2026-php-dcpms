<?php

require_once "Funcionario.php";
require_once "Departamento.php";

// crie o Departamento, adicione 4+ funcionários
// e imprima folha total e média salarial

$departamento1 = new Departamento([]);

$funcionario1 = new Funcionario("Daniel", "CEO", 66666);
$funcionario2 = new Funcionario("William", "Diretor", 4000);
$funcionario3 = new Funcionario("Kazuo", "Estagiario", 4000);
$funcionario4 = new Funcionario("Guilherme", "Faxineiro", 1000);

$departamento1->adicionarFuncionario($funcionario1);
$departamento1->adicionarFuncionario($funcionario2);
$departamento1->adicionarFuncionario($funcionario3);
$departamento1->adicionarFuncionario($funcionario4);

echo "Funcionários: " . "<br>";
print_r($departamento1->getFuncionarios());
echo "<br><br>";
echo "A folha total é de: " . "R$ " .  $departamento1->calcularFolhaTotal();
echo "<br><br>";
echo "A média salarial é de: " . "R$ " .  $departamento1->mediaSalarial();