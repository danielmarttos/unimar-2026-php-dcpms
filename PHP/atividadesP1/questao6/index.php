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
        if ($novoCargo == 'Analista' OR $novoCargo == 'Assistente' OR $novoCargo == 'Coordenador') {
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
    public function calcularSalarioLiquido(): float
    {
        // desconto de 11% + 5% extra se > 5000
        if ($this->salario > 5000) {
            return ($this->salario - ($this->salario * 0.16));
        } else {
            return ($this->salario - ($this->salario * 0.11));
        }
    }
    public function ehElegivelParaBonus(): bool
    {
        $valor = $this->calcularSalarioLiquido();
        // Coordenador E salário líquido > 4000
        if ($valor > 4000 && $this->cargo == 'Coordenador') {
            return 1;
        } else {
            return 0;
        }
    }
}

class Departamento
{
    private array $funcionarios = [];

    public function __construct(array $funcionarios)
    {
        $this->funcionarios = $funcionarios;
    }
    public function adicionarFuncionario(Funcionario $f): void
    {

        $nome = $f->getNome();
        $cargo = $f->getCargo();
        $salario = $f->getSalario();
        $salarioliqu = $f->calcularSalarioLiquido();

        $funcionario = [
            "nome" => $nome,
            "cargo" => $cargo,
            "salario" => $salario,
            "salario_liquido" => $salarioliqu
        ];

        array_push($this->funcionarios, $funcionario);

    }
    public function calcularFolhaTotal(): float
    {
        // some o salário líquido de todos
        $num = count($this->funcionarios);
        $i = 0;
        $total = 0;
        while ($num > $i) {
            $total += $this->funcionarios[$i]["salario_liquido"];
            $i += 1;
        }
        return $total;
    }

    public function getFuncionarios(): array
    {
        return $this->funcionarios;
    }

    public function funcionariosPorCargo(string $cargo): array
    {
        $filtro = [];

        $num = count($this->funcionarios);
        $i = 0;
        while ($num > $i) {

            if (($this->funcionarios[$i]["cargo"]) == $cargo) {
                array_push($filtro, $this->funcionarios[$i]);
            }

            $i += 1;
        }
        return $filtro;

    }
    public function mediaSalarial(): float
    {
        $total = $this->calcularFolhaTotal();
        $num = count($this->funcionarios);
        $media = 0;
        if ($num > 0) {
            $media = $total / $num;
        }

        return $media;
    }
}

//Testes comprovando funcionamento!

$funcionario1 = new Funcionario("Roberto", "Chefe", 4000);

echo $funcionario1->getNome() . "<br>";
echo $funcionario1->getCargo() . "<br>";
echo $funcionario1->getSalario() . "<br><br>";

$funcionario2 = new Funcionario("Roberta", "Chefa", 6000);

echo $funcionario2->getNome() . "<br>";
echo $funcionario2->getCargo() . "<br>";
echo $funcionario2->getSalario() . "<br><br>";

$departamento1 = new Departamento([]);

$departamento1->adicionarFuncionario($funcionario1);
$departamento1->adicionarFuncionario($funcionario2);

print_r($departamento1->funcionariosPorCargo("Chefa"));
echo "<br><br>";
print_r($departamento1->funcionariosPorCargo("Chefe"));
echo "<br><br>";
print_r($departamento1->mediaSalarial());