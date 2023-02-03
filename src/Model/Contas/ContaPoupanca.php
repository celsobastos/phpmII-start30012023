<?php

namespace Banco\Model\Contas;

class ContaPoupanca extends Conta {
    protected function taxa(float $valorTaxa = 0.02) : float {
        return $valorTaxa;
    }
}