<?php

$p = PHP_EOL;

class Carrinho {

    private array $itens = [];
    private float $total = 0;

    public function __construct(array $itens, float $total) {

        $this->itens = $itens;
        $this->total = $total;

    }

    public function adicionarItem(array $item) {
 

        array_push($this->itens, $item);
        $this->total += $item["valor"];

    }

    public function calcularTotal(): float {

        return $this->total;

    }

        public function aplicarCupom(float $percentual) {

        if ($this->total > 100) {

            $desconto = ($this->total/100)*$percentual;
            $this->total -= $desconto;

        }

    }
}


//adicionando os itens do primeiro carrinho

$c1 = new Carrinho([],0);
$item = ["nome" => "Sucrilhos",
         "valor" => 20   ];
$c1->adicionarItem($item);
$item = ["nome" => "Nescau",
         "valor" => 18   ];
$c1->adicionarItem($item);
$item = ["nome" => "Ronaldo",
         "valor" => 999   ];
$c1->adicionarItem($item);

echo "Calculando o total carrinho 1: " . $c1->calcularTotal();

echo "<br>";
echo "<br>";

//aplicando desconto com mais de 100 reais

$c1->aplicarCupom(25);
echo "Calculando o total carrinho 1 depois do desconto: " . $c1->calcularTotal();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//adicionando os itens do segundo carrinho

$c2= new Carrinho([],0);
$item = ["nome" => "Whey",
         "valor" => 20   ];
$c2->adicionarItem($item);
$item = ["nome" => "Banana",
         "valor" => 0.9   ];
$c2->adicionarItem($item);

echo "Calculando o total carrinho 2: " . $c2->calcularTotal();

echo "<br>";
echo "<br>";

//aplicando desconto com mais de 100 reais

$c2->aplicarCupom(25);
echo "Calculando o total carrinho 2 depois do desconto: " . $c2->calcularTotal();