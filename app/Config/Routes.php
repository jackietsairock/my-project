<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Hello::index');
$routes->get('hello/(:any)', 'Hello::greet/$1');

$routes->get('users', 'User::index');
$routes->get('users/add', 'User::add');

$routes->get('testDB_connect', 'TestDb::index');