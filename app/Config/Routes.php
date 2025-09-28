<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/about', 'Home::about');

$routes->get('/projects', 'Projects::index');
$routes->get('/projects/formadd', 'Projects::formadd');
$routes->get('/projects/edit/(:segment)', 'Projects::edit/$1');
$routes->get('/projects/detail/(:segment)', 'Projects::detail/$1');

$routes->post('/projects/update/(:segment)', 'Projects::update/$1');
$routes->post('/projects/save', 'Projects::save');
$routes->post('/projects/delete/(:segment)', 'Projects::delete/$1');
