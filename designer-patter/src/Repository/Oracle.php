<?php

namespace Impacta\Cursos\Repository;

use PDO;

class Oracle implements CursosInterface {

    public function connect(): PDO {

        return new \PDO(
            'mysql:host=localhost;dbname=escola',
            'root',
            '123456789'
        );

    }
}