<?php

namespace Banco\Model\Pessoas;

use Banco\Model\LoginInterface;

class Clientes extends Pessoa implements LoginInterface {
    protected function limiteCaracter() : int {
        return 100;
    }

    public function logar(string $senha): bool {
        if ($senha === '123') {
            return true;
        }
        throw new \Exception('Senha invalida');
    }
}