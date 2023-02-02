<?php

namespace Loja\Model;

abstract class Pessoa {
    protected string $nome;
    protected string $cpf;
    protected string $telefone;
    protected string $endereco;
    protected string $cep;

    public function setNome(string $nome): void {
        if(mb_strlen($nome) <= 20) {
            $this->nome = $nome;
            return;
        }
        echo 'nome deve ser menor ou igual a 20 caracteres';
    }


}