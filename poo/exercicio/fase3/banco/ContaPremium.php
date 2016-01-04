<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 22/12/15
 * Time: 18:20
 */
class ContaPremium extends ContaAbstract
{
    public function __construct()
    {
        $this->saldo = $this->saldo + 10;
    }

    protected function calculoDeposito($valor)
    {
        return $valor += 20;
    }
}