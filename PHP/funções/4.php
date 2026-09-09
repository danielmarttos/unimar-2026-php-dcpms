<?php

class ContaBancaria {

    private float $saldo = 0;
    private array $extrato = [];

    public function __construct(float $saldo, array $extrato) {

        $this->saldo = $saldo;
        $this->extrato = $extrato;

    }

    public function depositar(float $v) {

        if ($v) {
            $this->saldo += $v;
            array_push($this->extrato, "Depositado $v!");
            return $this->saldo;
            }

    }

    public function sacar(float $v) {

        if($v <= $this->saldo){
            $this->saldo -= $v;
            array_push($this->extrato, "Sacando R$$v!");
            return $this->saldo;
        }else{
            array_push($this->extrato, "Tentou sacas R$$v só tendo R$$this->saldo kkkkkkj pobre");
            return 0;
        }
    }

    public function getExtrato(): array {

        return $this->extrato;

    }
}

$conta1 = new ContaBancaria(1000, []);

echo $conta1->depositar(10000);
echo "<br>";
echo $conta1->sacar(100);
echo "<br>";
echo $conta1->sacar(99999999);
echo "<br>";
print_r($conta1->getExtrato());