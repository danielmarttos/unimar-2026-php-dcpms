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