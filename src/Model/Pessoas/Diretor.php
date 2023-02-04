<?php

namespace Banco\Model\Pessoas;

use Banco\Model\LoginInterface;
use Exception;

class Diretor extends Funcionarios implements LoginInterface {

    private string $premio;

    public function __construct(string $premio){
        $this->premio = $premio;
    }

    public function bonificacao(float $bonificacao): void {
        $this->salario += $this->salario * 0.2;
    }

    public function logar(string $senha): bool {
        if ($senha === '321') {
            return true;
        }

        throw new Exception('Senha invalida');
    }
}