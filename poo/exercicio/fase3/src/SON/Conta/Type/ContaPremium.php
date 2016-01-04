<?php
namespace SON\Conta\Type;

use SON\Conta\ContaAbstract;

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