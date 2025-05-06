<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/biodata', 'Home::biodata');
$routes->get('/programstudi', 'Programstudi::index');
$routes->get('/tambah-programstudi', 'Programstudi::tambah');
// fakultas
$routes->get('/fakultas', 'Fakultas::index');
$routes->post('/fakultas-tambah', 'Fakultas::tambah');
$routes->get('/fakultas-tambah', 'Fakultas::tambah');



$routes->POST('/tambah-programstudi', 'Programstudi::tambah');
$routes->get('/biodataCard/(:any)/(:any)', 'Home::biodataCard/$1/$2');
$routes->get('/piramid/(:num)/(:num)', 'Home::piramid/$1/$2');


