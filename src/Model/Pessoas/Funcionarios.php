<?php

namespace Banco\Model\Pessoas;

abstract class Funcionarios extends Pessoa {

    // public function __construct(
    //     protected string $nome,
    //     protected string $cpf,
    //     protected Endereco $endereco,
    //     protected array $telefone,
    //     protected float $salario,
    // ) {
    //     parent::__construct($nome, $cpf, $endereco, $telefone = []);
    //     $this->salario = $salario;
    // }

    protected function limiteCaracter() : int {
        return 150;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    abstract public function bonificacao(float $bonificacao): void;
}
