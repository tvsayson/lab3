<?php

use CodeIgniter\Router\RouteCollection;

/**
 
@var RouteCollection $routes*/
$routes->get('/', 'Home::index');

use App\Controllers\News; // Add this line (1) 
use App\Controllers\Guests;
use App\Controllers\Pages;

$routes->get('news', [News::class, 'index']);           // Add this line (1)
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line (1)

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('guests', [Guests::class, 'index']);
$routes->get('guests/new', [Guests::class, 'new']);
$routes->post('guests', [Guests::class, 'create']);
$routes->get('guests/(:segment)', [Guests::class, 'show']);