<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Hello::index');
$routes->get('hello/(:any)', 'Hello::greet/$1');

$routes->get('testDB_connect', 'TestDb::index');

$routes->get('users', 'User::index');         // 列表
$routes->get('users/create', 'User::create'); // 顯示新增表單
$routes->post('users/store', 'User::store');  // 新增存檔

$routes->get('users/edit/(:num)', 'User::edit/$1');   // 編輯表單
$routes->post('users/update/(:num)', 'User::update/$1'); // 更新資料

$routes->get('users/delete/(:num)', 'User::delete/$1');  // 刪除
