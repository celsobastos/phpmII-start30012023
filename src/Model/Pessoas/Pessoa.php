<?php

namespace Banco\Model\Pessoas;

abstract class Pessoa {
    protected string $nome;
    protected string $cpf;
    protected string $telefone;
    protected string $endereco;
    protected string $cep;

    public function setNome(string $nome): void {
        $limite = $this->limiteCaracter();
        if(mb_strlen($nome) <= $limite) {
            $this->nome = $nome;
            return;
        }
        echo 'Erro, nome invalido';
    }

    abstract protected function limiteCaracter() : int;
}