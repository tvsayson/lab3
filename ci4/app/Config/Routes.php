<?php
 
use CodeIgniter\Router\RouteCollection;
 
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
 
use App\Controllers\Guests;
use App\Controllers\News;
use App\Controllers\Pages;
 
$routes->get('guests', [Guests::class, 'index']);
$routes->get('guests/new', [Guests::class, 'new']);
$routes->post('guests', [Guests::class, 'create']);
$routes->get('guests/(:segment)', [Guests::class, 'show']);
 
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);
 
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);