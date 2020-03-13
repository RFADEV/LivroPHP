<?php
$carros = array('Palio','Gol','Fiesta','Corsa');
var_dump($carros);
print_r($carros);

$a = 5;
$b = $a;
$a = 2;

echo("$a $b");

$c = 5;
$d = &$c;
$d = 2;

echo("\n$c $d");

$obj = new stdClass;
$obj->nome = 'Renan';

$obj2 = $obj;

$obj2->nome = 'Duda';
echo("\n");
print $obj->nome;
echo("\n");
print $obj2->nome;

echo("\n\nCarro : $carros[2]");

echo("\n\n OBJETOS\n");
$carro = new stdClass;
$carro->modelo = 'Corsinha';
$carro->ano = 2002;
$carro->cor = 'Amarelo';

print_r($carro);
echo("\n");

print $carro->modelo.' ';
print $carro->ano.' ';
print $carro->cor.' ';


function calcula_imc(float $peso, float $altura){
echo("\n");
    var_dump($peso,$altura);
    return $peso / ($altura * $altura);
}
echo("\n");

var_dump(calcula_imc('80',160));
#var_dump(calcula_imc('80x',160)); retorna erro por causa da letra
echo("\nPAGINA 37 \n");


$remove_acento = function($str){
    $a = array('à','À','á','Á','ã','Ã','â');
    $b = array('A','A','A','A','A','A','A');
    
    return str_replace($a,$b,$str);
};

print $remove_acento('João').PHP_EOL;
print '<br>';

$palavras = array();
$palavras[] = 'Avião';
$palavras[] = 'Pá';

$r = array_map($remove_acento,$palavras);
print_r($r);


$fd = fopen(__FILE__,"r");
$linha = 1;
while(!feof($fd)){
    $buffer = fgets($fd,4096);
    if ($linha < 2){
        echo $buffer;
    }
    $linha++;
}
fclose($fd);

//pagina 60