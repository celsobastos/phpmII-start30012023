<?php

namespace Banco\Model\Contas;

class ContaCorrente extends Conta {
    protected function taxa(float $valorTaxa = 0.1) : float {
        return $valorTaxa;
    }
}