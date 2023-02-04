<?php

abstract class Cliente {
    abstract public function desconto(): float;
}
class ClientePessoaFisica extends Cliente{
    public $compra;
    public function desconto() : float {
        if ($this->compra > 2000) {
            return 0.1;
        }
    }
}
class ClientePessoaJuridica extends Cliente{
    public $compra;
    public function desconto(): float {
        if ($this->compra > 2000) {
            return 0.2;
        }
    }
}

class ExecutaServico {
    public function execDesconto(Cliente $cliente) : float {
        return $cliente->desconto();
    }
}

$cli = new ClientePessoaJuridica();

$executaDesconto = new ExecutaServico();
echo $executaDesconto->execDesconto($cli);