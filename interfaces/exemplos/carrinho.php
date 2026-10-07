<?php

class Carrinho
{
    private array $itens = [];

    public function adicionar(Produto $p): void
    {
        $this->itens[] = $p;
    }

    public function total(): float
    {
        $soma = 0;
        foreach ($this->itens as $p) {
            $soma += $p->getPreco();
        }
        return $soma;
    }
}
// Produto e ProdutoComposto entram do mesmo jeito