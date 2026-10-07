<?php

class ProdutoPerecivel extends Produto
{
    private string $validade;

    public function __construct(string $nome, float $preco, string $validade) {
        parent::__construct($nome, $preco);
        $this->validade = $validade;
    }

    public function getValidade(): string
    {
        return $this->validade;
    }
}

$leite = new ProdutoPerecivel("Leite", 5.9, "10/12");
echo $leite->getNome();  // herdado do Produto