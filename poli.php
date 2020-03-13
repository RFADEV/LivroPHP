<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/ContaCorrente.php';

//criacao de objetos
$contas = array();
$contas[] = new ContaCorrente(6677,"CC.1234.56",100,500);
$contas[] = new ContaPoupanca(6678,"PP.1234.57",100);

//percorre as contas

foreach ($contas as $key =>$conta) {
    print "Conta: {$conta->getInfo()}".PHP_EOL;
    print "Saldo Atual: {$conta->getSaldo()}".PHP_EOL;
    $conta->depositar(200);
    print "Deposito de 200 Reais".PHP_EOL;
    print "Saldo Atual: {$conta->getSaldo()}".PHP_EOL;

    if($conta->retirar(700)){
        print "retirada de 700 reais".PHP_EOL;
    } else{
        print "retirada de 700 reais NAO PERMITIDA".PHP_EOL;
    }
    print "Saldo Atual: {$conta->getSaldo()}".PHP_EOL;
}

?>