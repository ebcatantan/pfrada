<?php
$routes->group('business-types', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'BusinessTypes::index');
    $routes->get('(:num)', 'BusinessTypes::index/$1');
    $routes->get('show/(:num)', 'BusinessTypes::show_businesstype/$1');
    $routes->match(['get', 'post'], 'add', 'BusinessTypes::add_businesstype');
    $routes->match(['get', 'post'], 'edit/(:num)', 'BusinessTypes::edit_businesstype/$1');
    $routes->delete('delete/(:num)', 'BusinessTypes::delete_businesstype/$1');
});
