<?php

namespace Impacta\Cursos\Repository;

interface CursosInterface {
    public function connect(): \PDO;
}