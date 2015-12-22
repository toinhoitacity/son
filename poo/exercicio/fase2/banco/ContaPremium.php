<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 22/12/15
 * Time: 18:20
 */
class ContaPremium extends Conta
{
    public function __construct()
    {
        $this->saldo = $this->saldo + 10;
    }

    protected function calculoDeposito($valor)
    {
        $valorNormal = parent::calculoDeposito($valor);
        return $valorNormal += 20;
    }
}