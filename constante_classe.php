<?php

class Pessoa{
    private $nome;
    private $genero;

    const GENEROS = array('M'=>'Masculino','F'=>'Feminino');

    public function __construct($nome,$genero)
    {
        $this->nome=$nome;
        $this->genero=$genero;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getNomeGenero(){
        return self::GENEROS[$this->genero];
    }
}

$p1 = new Pessoa('Maria Eduarda','F');
$p2 = new Pessoa('Renan','M');

print 'Nome: '.$p1->getNome().PHP_EOL;
print 'Genero: '.$p1->getNomeGenero().PHP_EOL;
print 'Nome: '.$p2->getNome().PHP_EOL;
print 'Genero: '.$p2->getNomeGenero().PHP_EOL;

print_r(Pessoa::GENEROS);
