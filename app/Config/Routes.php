<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/personas','PersonController::index');
$routes->get('/personas/(:any)','PersonController::buscarNombre/$1');
