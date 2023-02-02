<?php

namespace Loja;

use Exception;
use Loja\LojaException;

class Usuario {

    private string $login;
    private string $senha;

    public function setSenha( string $senha) {
        $this->senha = $senha;
    }

    public function logar() {
        if ($this->senha !== '123') {
            throw new LojaException("Senha invalida");
        }

        return true;
    }

}