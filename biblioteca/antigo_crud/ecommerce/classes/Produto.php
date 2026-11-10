<?php 

class Produto {
    private int $id;
    private string $nome;
    private int $quantidade;
    private float $preco;

    public function __construct($id, $nome, $quantidade, $preco) {
        $this->nome = $nome;
        $this->id = $id;

        if ($quantidade < 0) {
            $quantidade = 0;
        }
        
        $this->quantidade = $quantidade;

        if ($preco < 0) {
            $preco = 0;
        }

        $this->preco = $preco;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }
}