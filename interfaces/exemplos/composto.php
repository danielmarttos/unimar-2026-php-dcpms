<?php

class ProdutoComposto extends Produto
{
    private array $itens = [];

    public function __construct(string $nome)
    {
        parent::__construct($nome, 0);
    }

    public function adicionar(Produto $p): void
    {
        $this->itens[] = $p;
    }

    public function getPreco(): float
    {
        $total = 0;
        foreach ($this->itens as $i)
            $total += $i->getPreco();
        return $total;
    }
}