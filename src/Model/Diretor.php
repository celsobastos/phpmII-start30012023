<?php

namespace Loja\Model;

class Diretor extends Funcionarios {

    public function bonificacao(float $bonificacao): void {
        $this->salario += $this->salario * 0.2;
    }
}