<?php

namespace Banco\Model;

interface LoginInterface {
    public function logar(string $senha) : bool;
}