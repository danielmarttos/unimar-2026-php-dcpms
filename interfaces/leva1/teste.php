<?php

include('classes/prod.php');
include('classes/prod-perecivel.php');
include('classes/prod-eletronico.php');
 
$leite = new ProdutoPerecivel('Leite', 5.90, '10/12');
$fone = new ProdutoEletronico('Fone de Ouvido', 120.00, 12);

echo $leite->getValidade() . "\n" . $leite->getNome() . "\n" . $leite->getPreco() . "\n" . "\n";
echo $fone->getGarantia() . "\n" . $fone->getNome() . "\n" . $fone->getPreco() . "\n" . "\n";

echo "--------\n\n";

include('classes/prod-importado.php');
include('classes/prod-frete.php');

$tenis = new ProdutoImportado('Tênis', 200.00, 30.00);
$mesa = new ProdutoFrete('Mesa', 150.00, 8);
$caneta = new Produto('Caneta', 3.50);

$caderno = new Produto('Caderno', 12.00);
$lapis = new Produto('Lápis', 1.50);

echo $tenis->getTaxa() . "\n" . $tenis->getNome() . "\n" . $tenis->getPreco() . "\n" . "\n";
echo $mesa->getFrete() . "\n" . $mesa->getNome() . "\n" . $mesa->getPreco() . "\n" . "\n";
echo $caneta->getNome() . "\n" . $caneta->getPreco() . "\n" . "\n";

echo "--------\n\n";

include('classes/prod-composto.php');
// Carrinho: guarda os produtos
 
$kitaula = new ProdutoComposto('Kit volta as Aulas');
$kitaula->adicionar($caneta);
$kitaula->adicionar($caderno);
$kitaula->adicionar($lapis);

$mochila = new Produto('Mochila', 89.90);

