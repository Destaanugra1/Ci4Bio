<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/biodata', 'Home::biodata');
$routes->get('/biodataCard/(:any)/(:any)', 'Home::biodataCard/$1/$2');
$routes->get('/piramida/(:num)/(:num)', 'Home::piramida/$1/$2');

