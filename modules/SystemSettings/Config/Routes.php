<?php
$routes->group('business-permit-fees', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'BusinessPermitFees::index');
    $routes->get('(:num)', 'BusinessPermitFees::index/$1');
    $routes->get('show/(:num)', 'BusinessPermitFees::show_businesspermitfees/$1');
    $routes->match(['get', 'post'], 'add', 'BusinessPermitFees::add_businesspermitfees');
    $routes->match(['get', 'post'], 'edit/(:num)', 'BusinessPermitFees::edit_business/$1');
    $routes->delete('delete/(:num)', 'BusinessPermitFees::delete_businesspermitfees/$1');
});

$routes->group('business-types', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'BusinessTypes::index');
    $routes->get('(:num)', 'BusinessTypes::index/$1');
    $routes->get('show/(:num)', 'BusinessTypes::show_businesstype/$1');
    $routes->match(['get', 'post'], 'add', 'BusinessTypes::add_businesstype');
    $routes->match(['get', 'post'], 'edit/(:num)', 'BusinessTypes::edit_businesstype/$1');
    $routes->delete('delete/(:num)', 'BusinessTypes::delete_businesstypes/$1');
});
