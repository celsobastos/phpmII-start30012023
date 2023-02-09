<?php

namespace Impacta\Cursos\Controller;

use Impacta\Cursos\Model\Cursos;
use Impacta\Cursos\Repository\CursosRepository;

class NovoCurso {

    public function handle() :void {


        // $cursosRepository = new CursosRepository();
        // $cursos = new Cursos(1, 'Java II', 1);
        // $cursosRepository->add($cursos);

        $title = 'Novo Curso';
        require __DIR__ . '/../View/novo-curso.php';
    }
}