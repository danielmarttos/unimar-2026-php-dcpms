<?php

class ProdutoComDesconto extends Produto
{
    private float $percentual;

    public function __construct(string $nome,float $preco,float $percentual) {
        parent::__construct($nome, $preco);
        $this->percentual = $percentual;
    }

    // override: mesmo nome do método do pai
    public function getPreco(): float
    {
        $cheio = parent::getPreco();
        return $cheio - ($cheio * $this->percentual / 100);
    }
}