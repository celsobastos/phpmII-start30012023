<?php

namespace Impacta\Cursos\Controller;

use Impacta\Cursos\Repository\CursosRepository;
use Impacta\Cursos\Repository\mysql;

class ListaCursos {

    public function handle() :void {

        $title = 'Lista de cursos';

        $connect = new Mysql();
        $cursosRepository = new CursosRepository($connect);
        $cursos = $cursosRepository->all();

        require __DIR__ . '/../View/lista-curso.php';
    }
}