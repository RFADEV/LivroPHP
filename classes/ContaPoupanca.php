<?php
class ContaPoupanca extends Conta {
    public function retirar($quantia){
        if($this->saldo >= $quantia){
            $this->saldo -= $quantia;
        } else{
            return false;//transação não permitida
        }
        return true;//transação permitida
    }
}