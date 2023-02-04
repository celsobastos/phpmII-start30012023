<?php

namespace Banco\Model\Pessoas;

class Endereco {

    public function __construct(
        private string $numero,
        private string $cep,
        private string $logradouro,
    )
    {
        $this->numero =  $numero;
        $this->cep =  $cep;
        $this->logradouro =  $logradouro;
    }

}