<?php

namespace Banco\Services;

use Banco\Model\Pessoas\Funcionarios;
use Banco\Model\LoginInterface;
use Banco\Model\Pessoas\Diretor;
use Banco\Model\Pessoas\Clientes;

class ExecutaLogin {

    public function acessarSistema(LoginInterface $login, string $senha) {
        if($login->logar($senha)) {
            return true;
        }

        return false;
    }

    public function executaBonificao(Funcionarios $funcionario, float $valor) {
        $funcionario->bonificacao($valor);
    }

    public function validaEmail(string $email) {
        if(!str_ends_with($email, '@impacta.com')) {
            throw new \InvalidArgumentException('Email Invalido');
        }
    }

    public function getNome($nome, Diretor $diretor) {
        if (!$diretor->verificaNome($nome)) {
            return false;
        }
        return true;


    }



}