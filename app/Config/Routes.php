<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->post('/login', 'Home::login');





$routes->get('/veragregaruser', 'Home::veragregar');

$routes->get('/cargarvistainicio', 'Home::cargarvistainicio');


$routes->get('/cargaragregarusuario', 'Home::cargaragregarusuario');

$routes->post('/agregarusuario', 'Home::agregarusuario');

$routes->get('/mostraruser', 'Home::mostraruser');

$routes->get('/cargaragregarmotocicleta', 'Home::cargaragregarmotocicleta');
$routes->post('/agregarmotocicleta', 'Home::agregarmotocicleta');

$routes->get('/mostrarmotocicleta', 'Home::mostrarmotocicleta');
$routes->get('/cargaragregarimagen', 'Home::cargaragregarimagen');

$routes->post('/subirimagen', 'Home::subirimagen');

$routes->post('/eliminarimagen', 'Home::eliminarimagen');

