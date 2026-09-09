<?php

$tarefas = [];

//Simule uma pilha de tarefas: adicione itens no topo com array_push e remova o item do topo com array_pop.
//Adicionar pelo menos 3 tarefas com array_push
//Remover 1 tarefa com array_pop e imprimir qual foiremovida
//Imprimir a pilha (print_r) antes e depois do pop
//Bônus: usar if com empty($tarefas) para avisar quandoa pilha ficar vazia

print_r($tarefas);
echo "<br>";

array_push($tarefas, "Cozinhar", "Lavar louça", "tomar banho");
print_r($tarefas);
echo "<br>";

array_pop($tarefas);
print_r($tarefas);