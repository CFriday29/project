<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/pages/course', 'Pages::course');
$routes->get('/pages/free_class', 'Pages::free_class');
$routes->get('/pages/order', 'Pages::order');
$routes->get('/pages/class', 'Pages::class');
$routes->get('/pages/account', 'Pages::account');
$routes->get('/pages/job_hunter', 'Pages::job_hunter');
$routes->get('/pages/team', 'Pages::team');
$routes->get('/pages/pembayaran', 'Pages::pembayaran');
$routes->get('/class/cyber', 'Pages::cyber');
$routes->get('/Form/add_team', 'Pages::add_team');