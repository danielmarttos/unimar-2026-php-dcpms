<?php

class ProdutoEletronico extends Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $garantia
    ) {
        parent::__construct($nome, $preco);
    }

    public function getGarantia(): int
    {
        return $this->garantia;
    }

}