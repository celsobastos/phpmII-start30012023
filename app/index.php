<?php

require __DIR__ . "/../vendor/autoload.php";

use Loja\Model\Clientes;

$cli = new Clientes();
$cli->setNome('Paulo da Silva  asdf f asdf asdf asfdasdf ');

echo '<pre>';
var_dump($cli);
