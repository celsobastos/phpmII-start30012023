<?php

namespace Loja\Model;

class Clientes extends Pessoa {
    protected function limiteCaracter() : int {
        return 100;
    }
}