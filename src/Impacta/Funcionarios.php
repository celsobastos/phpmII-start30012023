<?php

namespace Loja\Impacta;

class Funcionarios {
    public $nome = "Paulo da Silva";
    public $senha = '123';

    public function testAccess(string $senha): bool {
        if($senha !== $this->senha) {
           return false;
        }
        return true;
    }
}