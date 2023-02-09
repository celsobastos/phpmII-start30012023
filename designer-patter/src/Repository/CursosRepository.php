<?php

namespace Impacta\Cursos\Repository;

use Impacta\Cursos\Model\Cursos;
use Impacta\Cursos\Repository\CursosInterface;

class CursosRepository {

    private $connect;

    public function __construct(CursosInterface $conexao) {
        $this->connect = $conexao->connect();
    }

    public function all(): array {
        $query = 'SELECT * FROM cursos where status = :status';
        $stmt = $this->connect->prepare($query);
        $stmt->execute([
            ':status' => 1,
        ]);

        $listagem = [];

        while($curso = $stmt->fetch()) {
            $listagem[] = new Cursos(
                $curso['id'],
                $curso['descricao'],
                $curso['status'],
            );
        }
        return $listagem;
    }

}