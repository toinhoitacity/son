<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 22/12/15
 * Time: 21:55
 */
namespace SON\Conta;

use SON\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;
    protected $saldo;

    public final function depositar($valor)
    {
        $this->iniciaProcesso();
        $this->saldo= $this->saldo + $this->calculoDeposito($valor);
        $this->finalizaProcesso();
        return true;
    }

    public function sacar($valor)
    {
        $this->iniciaProcesso();
        if ( $this->saldo >= $valor ) {
            $this->saldo= $this->saldo - $valor;
            $this->finalizaProcesso();
            return true;
        }
        $this->finalizaProcesso();
        return false;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    protected abstract function calculoDeposito($valor);
}