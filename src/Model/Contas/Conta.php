<?php

namespace Banco\Model\Contas;

use Exception;

abstract class Conta {
    protected float $saldo = 1000;

    public function sacar(float $valorDoSaque): void {
        if ($valorDoSaque > $this->saldo) {
            throw new Exception('Valor insuficiente');
        }
        $this->saldo -= $valorDoSaque + $valorDoSaque * $this->taxa();
    }

    abstract protected function taxa(float $valorTaxa = 0.03) : float;
}
