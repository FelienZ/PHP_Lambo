<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/about', 'Home::about');

$routes->group('/projects', ['filter' => 'login'], static function($routes){
    $routes->get('', 'Projects::index');
    $routes->get('formadd', 'Projects::formadd');
    $routes->get('edit/(:segment)', 'Projects::edit/$1');
    $routes->get('detail/(:segment)', 'Projects::detail/$1');
    
    $routes->post('update/(:segment)', 'Projects::update/$1');
    $routes->post('save', 'Projects::save');
    $routes->post('delete/(:segment)', 'Projects::delete/$1');
});
