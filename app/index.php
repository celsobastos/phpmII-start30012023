<?php

require __DIR__ . "/../vendor/autoload.php";

use Loja\Model\Estagiario;

$funcionario = new Estagiario();
$funcionario->setNome("Jonas");
$funcionario->setSalario(2000);
echo $funcionario->soma();
//echo $funcionario->getSalario();

// var_dump($funcionario);