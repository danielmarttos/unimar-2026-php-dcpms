<?php

//Construção de classes e funções

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario) {

        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;

    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function getSalario(): float {
        return $this->salario;
    }

}

//Testes comprovando funcionamento!

$funcionario = new Funcionario("Roberto","Chefe",7000.99);

echo $funcionario->getNome();
echo $funcionario->getCargo();
echo $funcionario->getSalario();