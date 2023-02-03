<?php

require __DIR__ . "/../vendor/autoload.php";

use Banco\Services\ExecutaLogin;
use Banco\Model\Pessoas\Clientes;
use Banco\Model\Pessoas\Diretor;
use Banco\Model\Pessoas\Estagiario;

// $bonus = new ExecutaLogin();
// $bonus->bonificao(new Estagiario);
// var_dump($bonus);

$loginUser = new ExecutaLogin();
echo $loginUser->acessarSistema(new Clientes(), '123');
