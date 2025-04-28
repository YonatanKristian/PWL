<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/user/logout', 'AuthController::logout');
$routes->get('/admin/logout', 'AuthController::logout');

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);


$routes->get('/admin/dashboard', 'DashboardAdmin::index');
$routes->get('/user/dashboard', 'DashboardUser::index');
$routes->get('/user/keranjang', 'TransaksiController::index');
$routes->get('/admin/produk', 'ProdukController::index');







