<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/biodata', 'Home::biodata');

// fakultas
$routes->get('/fakultas', 'Fakultas::index');
$routes->post('/fakultas-tambah', 'Fakultas::tambah');
$routes->get('/fakultas-tambah', 'Fakultas::tambah');
// edit
$routes->get('/edit-fakultas/(:any)', 'Fakultas::edit/$1');
$routes->POST('/edit-fakultas/(:any)', 'Fakultas::edit/$1');
// delete
$routes->get('/delete-fakultas/(:any)', 'Fakultas::delete/$1');

// program studi
$routes->POST('/tambah-programstudi', 'Programstudi::tambah');
$routes->get('/tambah-programstudi', 'Programstudi::tambah');
$routes->get('/programstudi', 'Programstudi::index');
// edit 
$routes->get('/edit-programstudi/(:num)', 'Programstudi::edit/$1');
$routes->POST('/edit-programstudi/(:num)', 'Programstudi::edit/$1');
// delete
$routes->get('/delete-programstudi/(:num)', 'Programstudi::delete/$1');

$routes->get('/biodataCard/(:any)/(:any)', 'Home::biodataCard/$1/$2');
$routes->get('/piramid/(:num)/(:num)', 'Home::piramid/$1/$2');


// dosen

