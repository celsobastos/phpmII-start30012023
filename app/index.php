<?php

require __DIR__ . '/../vendor/autoload.php';

use Loja\Empresa\Funcionarios as Emp;
use Loja\Impacta\Funcionarios as Impacta;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$funcionario1 = new Impacta();
$test = $funcionario1->testAccess('123');

if ($test) {
    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('your.log', Level::Warning));

    // add records to the log
    $log->warning('Foo');
    //$log->error('Bar');
    echo 'Logado com sucesso!';
}
else {
    echo 'Erro!';
}
