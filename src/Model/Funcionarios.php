<?php

namespace Loja\Model;

abstract class Funcionarios extends Pessoa {
    protected float $salario;

    protected function limiteCaracter() : int {
        return 150;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    abstract protected function bonificacao(float $bonificacao): void;
}
