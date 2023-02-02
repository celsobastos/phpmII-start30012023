<?php

namespace Loja;

class LojaException extends \DomainException {

    public function meuMethod() {
        return 'Este erro eu não esperava';
    }
}