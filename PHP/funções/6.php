<?php

class Funcionario {
    private string $nome;
    private float $salarioBruto;

    public function __construct(string $nome, float $salarioBruto) {

        $this->nome = $nome;
        $this->salarioBruto = $salarioBruto;

    }

    public function salarioLiquido(): float {

        $salarioL = $this->salarioBruto-(11*($this->salarioBruto/100));

        return $salarioL;

    }

    public function retornaBruto(): float {

        return $this->salarioBruto;

    }

    public function retornaNome(): string {

        return $this->nome;

    }

}

$f1 = new Funcionario("Ronaldo",1600);
echo "Funcionário: " . $f1->retornaNome() . "; Salário Bruto de: " . $f1->retornaBruto() . "; Salário Liquido: " . $f1->salarioLiquido() . ";";