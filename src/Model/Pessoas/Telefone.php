<?php

namespace Banco\Model\Pessoas;

class Telefone {

    public function __construct(
        private string $codigo,
        private string $numero,
    )
    {
        $this->codigo =  $codigo;
        $this->numero =  $numero;
    }

}