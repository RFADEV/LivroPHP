<?php

class Pessoa{
    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome,$endereco)
    {
        $this->nome = $nome;
        $this->nome = $endereco;
    }

    public function setNascimento($nascimento){
        $partes = explode('-',$nascimento);
        if(count($partes)==3){
            if(checkdate($partes[1],$partes[2],$partes[0])){
                $this->nascimento = $nascimento;
                return true;
            }
            return false;
        }
        return false;
    }
}

$p1 = new Pessoa('Renan Andrade','Nilo Pacheco de Medeiros');

if($p1->setNascimento('05 de Novembro de 1999')){
    print "Atribuiu 05 de Novembro de 1999".PHP_EOL;
}else{
    print"Erro ao atribuir 05 de Novembro de 1999".PHP_EOL;
}

if($p1->setNascimento('1999-11-05')){
    print "Atribuiu 1999-11-05".PHP_EOL;
}else{
    print"Erro ao atribuir 1999-11-05".PHP_EOL;
}


