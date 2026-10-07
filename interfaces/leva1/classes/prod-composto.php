<?php

class ProdutoComposto extends Produto
{
    public function __construct(
        private string $nome,
        private array $itens = []
    ) {
        parent::__construct($nome, 0);
    }
    public function Adicionar(Produto $p)
    {
        array_push($this->itens, $p);
    }
    public function getPreco(): float
    {
        $total = 0;
        foreach ($this->itens as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }
}