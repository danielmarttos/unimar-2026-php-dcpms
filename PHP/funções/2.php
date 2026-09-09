<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $quantidade;


    public function __construct(string $nome, float $preco, int $quantidade) {
        
    $this->nome = $nome;
    $this->preco = $preco;
    $this->quantidade = $quantidade;

    }

    public function valorTotalEmEstoque(): float {

        $valortotal = ($this->quantidade*$this->preco);
        return $valortotal;

    }

}

$p1 = new Produto("banana", 20.99, 12);
echo "R$" . $p1->valorTotalEmEstoque();

echo "<br>" . "<br>";

$p2 = new Produto("maça", 9.87, 8);
echo "R$" . $p2->valorTotalEmEstoque();