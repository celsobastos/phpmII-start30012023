<?php

namespace Banco\Services;

use Banco\Model\Pessoas\Funcionarios;
use Banco\Model\LoginInterface;
use Banco\Model\Pessoas\Diretor;
use Banco\Model\Pessoas\Clientes;

class ExecutaLogin {
    public function acessarSistema(LoginInterface $login, string $senha) {
        if($login->logar($senha)) {
            echo 'Logado com sucesso!';
        }
    }

        // public function bonificao(Funcionarios $test) {
        //   $test->
        // }

}