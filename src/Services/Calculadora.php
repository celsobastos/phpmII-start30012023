<?php

namespace Banco\Services;

class Calculadora {

    public function soma(int $n1, int $n2) {

        if($n1 === -1) {
            return false;
        }
        return $n1 + $n2;
    }
}