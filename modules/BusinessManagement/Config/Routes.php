<?php
$routes->group('corporations', ['namespace' => 'Modules\BusinessManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Corporations::index');
    $routes->get('(:num)', 'Corporations::index/$1');
    $routes->get('show/(:num)', 'Corporations::show_corporation/$1');
    $routes->match(['get', 'post'], 'add', 'Corporations::add_corporation');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Corporations::edit_corporation/$1');
    $routes->delete('delete/(:num)', 'Corporations::delete_corporation/$1');
});
