<?php

namespace Banco\Model\Contas;

use Exception;

abstract class Conta {
    use \Banco\Model\MethodTrait;
    protected float $saldo = 1000;
    public $tipo;

    public function __construct(int $tipo)
    {
        $this->tipo = $tipo;
    }

    public function cobrarTaxa($tipo) {
        if ($tipo == 1) {
            return 0.05;
        }
        elseif ($tipo == 1) {
            return 0;
        }

    }
}



$contaCorrente = new Conta(1); // conta corrente
$contaCorrente = new Conta(2); // conta Poupanca