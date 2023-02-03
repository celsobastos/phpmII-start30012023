<?php

namespace Banco\Model\Pessoas;

use Banco\Model\LoginInterface;
use Exception;

class Diretor extends Funcionarios implements LoginInterface {

    public function bonificacao(float $bonificacao): void {
        $this->salario += $this->salario * 0.2;
    }

    public function logar(string $senha): bool {
        if ($senha === '321') {
            return true;
        }

        throw new Exception('Senha invalida');
    }

    public function soma() {
        echo 'Celso';
    }
}