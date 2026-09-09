<?php

class Retangulo {

    private float $base;
    private float $altura;


    public function __construct(float $base, float $altura) {

        $this->base = $base;
        $this->altura = $altura;

    }

    public function area(): float {

        $areatotal = ($this->base*$this->altura);
        return $areatotal;

    }

    public function perimetro(): float {

        $perimetrototal = 2*($this->base+$this->altura);
        return $perimetrototal;

    }

}

$r1 = new Retangulo(12,23);
$r2 = new Retangulo(10,10);

echo $r1->area();

echo "<br>";

echo $r2->area();

echo "<br>" . "<br>";

echo $r1->perimetro();

echo "<br>";

echo $r2->perimetro();