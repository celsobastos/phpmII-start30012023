<?php

require __DIR__ . '/../vendor/autoload.php';

$route = $_SERVER['PATH_INFO'] ?? '/cursos';
$routes = require __DIR__ . '/../Routes/routes.php';

/** @var Impacta\Cursos\Controller\ListaCursos $controlador */
$controlador = new $routes[$route];
$controlador->handle();
