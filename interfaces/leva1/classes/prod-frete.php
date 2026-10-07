<?php

class ProdutoFrete extends Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $frete
    ) {
        parent::__construct($nome, $preco);
    }

    public function getPreco(): float
    {
        $preco = parent::getPreco();
        $desconto = ($preco / 100) * $this->frete;
        $final = $preco + $desconto;
        return $final;
    }
    public function getFrete(): int
    {
        return $this->frete;
    }

}