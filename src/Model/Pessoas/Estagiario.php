<?php

namespace Banco\Model\Pessoas;

class Estagiario extends Funcionarios {

    public function bonificacao(float $bonificacao = 0.02): void {
        $this->salario += $this->salario * $bonificacao;
    }

    public function soma() {
        echo 'Celso';
    }
}