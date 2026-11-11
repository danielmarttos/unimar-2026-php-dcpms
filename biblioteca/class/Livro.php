<?php

class Livro
{
    public function __construct(
        private int $id,
        private string $titulo,
        private string $autor,
        private int $anoPublicacao,
    ) {}

    public function getId()
    {return $this->id;}

    public function getTitulo()
    {return $this->titulo;}

    public function getAutor()
    {return $this->autor;}

    public function getAnoPublicacao()
    {return $this->anoPublicacao;}

    public function setId($id)
    {$this->id = $id;}

    public function setTitulo($titulo)
    {$this->titulo = $titulo;}

    public function setAutor($autor)
    {$this->autor = $autor;}

    public function setAnoPublicacao($anoPublicacao)
    {$this->anoPublicacao = $anoPublicacao;}
}

?>