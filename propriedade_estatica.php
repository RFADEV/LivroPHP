<?php

class Software{
    private $id;
    private $nome;
    public static $contador;

    function __construct($nome)
    {
        self::$contador ++;

        $this->id = self::$contador;
        $this->nome = $nome;

        print "Software {$this->id} - {$this->nome}".PHP_EOL;
    }
}

new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');

echo 'Quantidade criada = '.Software::$contador;