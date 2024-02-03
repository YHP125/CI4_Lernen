<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/adduser', 'UserController::index');
$routes->post('/adduser', 'Home::index');
