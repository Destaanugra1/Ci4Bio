<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/biodata', 'Home::biodata');
$routes->get('/bintang/(:num)/(:num)', 'Home::bintang/$1/$2');
$routes->get('/biodataCard/(:any)/(:any)', 'Home::biodataCard/$1/$2');

