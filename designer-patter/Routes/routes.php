<?php

use Impacta\Cursos\Controller\ListaCursos;
use Impacta\Cursos\Controller\NovoCurso;

return [
    '/cursos' => ListaCursos::class,
    '/novo-curso' => NovoCurso::class,
];