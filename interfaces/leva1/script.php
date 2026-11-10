<?php

include("classes/prod.php");
include("classse/prod-composto");
include("classes/carrinho.php");

$lista = [];

for ($i=0; $i =! 9;) {

    echo "======== Bem-vindo ao mercadinho zé! ======== \n\n";
    
    echo "O que vamos comprar hoje?!\n";
    echo "[1] Adicionar produto ao carrinho\n";
    echo "[0] Sair\n";

    $num = fgets(STDIN);
    if ($num == 0) {
        $i = 9;
        echo "Finalizando...\n";
    }
    elseif ($num == 1) {
        echo "Digite o nome do produto: ";
        $nome = fgets(STDIN);
        echo "Digite o preço: ";
        $preco = fgets(STDIN);
        $produto = new Produto($nome,$preco);
    }
    
}