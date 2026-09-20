<?php

class Funcionario
{

    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {

        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;

    }
    public function setSalario(float $valor): void
    {
        if ($valor > 0) {
            $this->salario = $valor;
        }
    }
    public function setCargo(string $novoCargo): void
    {
        if ($novoCargo == 'Analista' OR $novoCargo == 'Assistente' OR$novoCargo == 'Coordenador') {
            $this->cargo = $novoCargo;
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
}

//Testes comprovando funcionamento!

$funcionario = new Funcionario("Roberto","Chefe",7000.99);

echo $funcionario->getNome() . "<br>";
echo $funcionario->getCargo() . "<br>";
echo $funcionario->getSalario() . "<br><br>";

//------------------------------------------

$funcionario->setCargo("Analista");
$funcionario->setSalario(30);

echo $funcionario->getNome() . "<br>";
echo $funcionario->getCargo() . "<br>";
echo $funcionario->getSalario() . "<br><br>";

//------------------------------------------

$funcionario->setCargo("Shrek");
$funcionario->setSalario(-2);

echo $funcionario->getNome() . "<br>";
echo $funcionario->getCargo() . "<br>";
echo $funcionario->getSalario() . "<br><br>";