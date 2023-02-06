<?php

require __DIR__ . "/../vendor/autoload.php";

use Banco\Services\ExecutaLogin;
use Banco\Model\Pessoas\Clientes;
use Banco\Model\Pessoas\Diretor;
use Banco\Model\Pessoas\Estagiario;
use Banco\Model\Pessoas\Endereco;
use Banco\Model\Pessoas\Telefone;

//$estagiario->nome = 'Amanda';
//echo $estagiario;

$estagiario = new Estagiario (
    nome: 'Celso',
    cpf: '12345',
    endereco: new Endereco('123', '123456','Rua das Flores'),
    telefone: [],
    salario: 500
);

echo '<pre>';
var_dump($estagiario);
die;

// $fone =  new Telefone('11', '95826-0001');

// for($i = 1; $i <= 4 ; $i++) {
//     $estagiario->addTelefone(new Telefone('11', '95826-000'. $i));
// }


// $fone =  new Telefone('11', '95826-0001');
$estagiario->addTelefone(new Telefone('11', '95826-0002'));
$estagiario->addTelefone(new Telefone('21', '92455-0007'));
$estagiario->addTelefone(new Telefone('21', '92455-0007'));
$estagiario->addTelefone(new Telefone('21', '92455-0007'));

echo '<pre>';
var_dump($estagiario);
die;

echo '<pre>';
var_dump($estagiario);
die;

$estagiario->setSalario(2000);
echo $estagiario->salario; // __get

// var_dump($estagiario);
die;

$diretor = new Diretor(200);
echo '<pre>';
var_dump($diretor);
die;

$estagiario = new Estagiario();
$estagiario->setSalario(2000);
var_dump($estagiario);
echo '<hr>';

$estagiarioBonificacao = new ExecutaLogin();
$estagiarioBonificacao->bonificao($estagiario, 0.06);


var_dump($estagiario);

echo '<hr>';

$diretor = new Diretor();
$diretor->setSalario(2000);
$diretorBonificacao = new ExecutaLogin();
$diretorBonificacao->bonificao($diretor, 0.1);
var_dump($diretor);


// $loginUser = new ExecutaLogin();
// echo $loginUser->acessarSistema(new Clientes(), '123');
