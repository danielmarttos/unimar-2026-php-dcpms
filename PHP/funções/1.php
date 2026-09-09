<?php

class Livro {

    private string $titulo;
    private string $autor;
    private float $preco;
    private bool $disponivel;


    public function __construct(string $titulo, string $autor, float $preco, bool $disponivel) {

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->disponivel = $disponivel;

    }

    public function aplicarDesconto(float $pct): void {

            $desconto = ($this->preco/100)*$pct;
            $this->preco -= $desconto; 

        }

    
    public function mostrar() {

        return $this->preco;

    }

}

$l1 = new Livro("JOJO","ARAKI","20.00",False);
$l1->aplicarDesconto(50);

$l2 = new Livro("Hentai","Japones safado","1000.00",True);
$l2->aplicarDesconto(34);

echo $l1->mostrar() . "<br>";
echo $l2->mostrar() . "<br>" . "<br>";

var_dump($l1);
echo "<br>";
var_dump($l2);
echo "<br>";
echo "<br>";
print_r($l1);
echo "<br>";
print_r($l2);