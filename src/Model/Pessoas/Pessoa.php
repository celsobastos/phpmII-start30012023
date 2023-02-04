<?php

namespace Banco\Model\Pessoas;

use DateTime;
use DateTimeZone;
use Monolog\Handler\MongoDBHandler;

abstract class Pessoa {

    use \Banco\Model\MethodTrait;


    public function __construct(
        protected string $nome,
        protected string $cpf,
        protected Endereco $endereco,
        /** @var Telefone[] $telefone */
        private array $telefone = [],
    ) {
        // $data = new DateTime('now', new DateTimeZone('America/Sao Paulo'));
    }

    public function addTelefone(Telefone $telefone) : void {
        $this->telefone[] = $telefone;
    }

    public function setNome(string $nome): void {
        $limite = $this->limiteCaracter();
        if(mb_strlen($nome) <= $limite) {
            $this->nome = $nome;
            return;
        }
        echo 'Erro, nome invalido';
    }

    private function getCpf() {
        return $this->cpf;
    }

    private function getNome() {
        return $this->nome;
    }

    public function __toString()
    {
        return "$this->nome $this->cpf";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    abstract protected function limiteCaracter() : int;
}