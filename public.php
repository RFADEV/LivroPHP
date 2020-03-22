<?php

class Pessoa{
    public $nome;
    public $endereco;
    public $nascimento;
}

$p1 = new Pessoa;
$p1->nome = 'Renan';
$p1->endereco = 'Nilo Pacheco de Mededeiros';
$p1->nascimento = '05/11/1999';
$p1->telefone = '(32) 99136-1014'; //definido em tempo de execução
print_r($p1);