<?php

namespace Banco\Model\Pessoas;

final class Estagiario extends Funcionarios {

    final public function bonificacao(float $bonificacao = 0.02): void {
        $this->salario += $this->salario * $bonificacao;
    }

    public function soma() {}
}