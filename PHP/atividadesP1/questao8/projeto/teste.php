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

echo "Nome do novo funcionário: ";
$nome = fgets(STDIN);
$nome = trim($nome);
echo "Cargo: ";
$cargo = fgets(STDIN);
$cargo = trim($cargo);
echo "Salário: ";
$salario = fgets(STDIN);
$salario = trim($salario);
$salario = (float) $salario;

$funcionario5 = new Funcionario($nome,$cargo,$salario);

$departamento1->adicionarFuncionario($funcionario1);
$departamento1->adicionarFuncionario($funcionario2);
$departamento1->adicionarFuncionario($funcionario3);
$departamento1->adicionarFuncionario($funcionario4);
$departamento1->adicionarFuncionario($funcionario5);

echo "Funcionários: " .  PHP_EOL;
print_r($departamento1->getFuncionarios());
echo PHP_EOL . PHP_EOL;
echo "A folha total é de: " . "R$ " .  $departamento1->calcularFolhaTotal();
echo PHP_EOL . PHP_EOL;
echo "A média salarial é de: " . "R$ " .  $departamento1->mediaSalarial();