<?php

class ProdutoPerecivel extends Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private string $validade
    ) {
        parent::__construct($nome, $preco);
    }

    public function getValidade(): string
    {
        return $this->validade;
    }
}