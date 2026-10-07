<?php

class ProdutoImportado extends Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private float $taxa
    ) {
        parent::__construct($nome, $preco);
    }
    public function getPreco(): float
    {
        $preco = parent::getPreco();
        $final = $preco + ($this->taxa);
        return $final;
    }
    public function getTaxa(): float
    {
        return $this->taxa;
    }
}