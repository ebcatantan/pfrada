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
