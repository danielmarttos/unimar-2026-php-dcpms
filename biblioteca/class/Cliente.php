<?php

class Livro
{
    public function __construct(
        private int $id,
        private string $nome,
        private string $email,
        private string $tipo,
    ) {}

    public function getId()
    {return $this->id;}

    public function getNome()
    {return $this->nome;}

    public function getEmail()
    {return $this->email;}

    public function getTipo()
    {return $this->tipo;}

    public function setId($id)
    {$this->id = $id;}

    public function setNome($nome)
    {$this->nome = $nome;}

    public function setEmail($email)
    {$this->email = $email;}

    public function setTipo($tipo)
    {$this->tipo = $tipo;}
}

?>