<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/about', 'Home::about');

$routes->get('/projects', 'Projects::index');
$routes->get('/projects/formadd', 'Projects::formadd');
