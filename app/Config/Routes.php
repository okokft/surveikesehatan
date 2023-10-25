<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/datakk', 'Home::datakk');
$routes->get('/dataanggota/(:segment)', 'Home::dataanggota/$1');
$routes->get('/editkk/(:segment)', 'Home::editkk/$1');
$routes->post('/home/savekk', 'Home::savekk');
$routes->get('/hapuskk/(:segment)', 'Home::hapuskk/$1');

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->get('/survei', 'Survei::index');
$routes->post('/submit', 'Survei::submit');
$routes->get('/finish/(:segment)', 'Survei::finish/$1');
