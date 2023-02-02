<?php

namespace Loja\Model;

abstract class Funcionarios extends Pessoa {
    protected float $salario;

    public function setNome(string $nome): void {
        if(mb_strlen($nome) <= 80) {
            $this->nome = $nome;
            return;
        }
        echo 'nome deve ser menor ou igual a 20 caracteres';
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    abstract protected function bonificacao(float $bonificacao): void;
}
