<?php

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