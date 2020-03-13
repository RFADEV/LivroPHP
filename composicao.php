<?php
require_once 'classes/Produto.php';
require_once 'classes/Caracteristica.php';

//criacao dos objetos
$p1 = new Produto('Chocolate',10,7);
//composicao
$p1->addCaracteristica('Cor','Branco');
$p1->addCaracteristica('Peso','2.6 kg');
$p1->addCaracteristica('Potência','20 watts RMS');

print 'Produto: '.$p1->getDescricao().PHP_EOL;
foreach ($p1->getCaracteriscas() as $c) {
    print 'Caracterisca: '.$c->getNome().' - '.$c->getValor().PHP_EOL;
}