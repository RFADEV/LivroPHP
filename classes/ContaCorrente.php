<?php
class ContaCorrente extends Conta {
    protected $limite;

    public function __construct($agencia,$conta,$saldo,$limite){
        parent:: __construct($agencia,$conta,$saldo);
        $this->limite = $limite;
    }

    public final function retirar($quantia){
        if(($this->saldo + $this->limite)>=$quantia){
            $this->saldo-=$quantia; //saque permitido 
        } else {
            return false;
        }
        return true;
    }
}
