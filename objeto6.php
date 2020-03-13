<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao,$estoque,$preco){
        
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        
        print "Contruído: Objeto: {$descricao}, Estoque: {$estoque}, Preço: {$preco}".PHP_EOL;
    }

    public function __destruct(){
        print "Destruído: Objeto: {$this->descricao}, Estoque: {$this->estoque}, Preço: {$this->preco}".PHP_EOL;
    }
}

$p1 = new Produto('Chocolate',10,5);
unset($p1);

$p2 = new Produto('Café',100,7);
unset($p2);