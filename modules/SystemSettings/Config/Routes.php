<?php

$routes->group('clearance-fees', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'Clearance::index');
    $routes->get('(:num)', 'Clearance::index/$1');
    $routes->get('show/(:num)', 'Clearance::show_clearance/$1');
    $routes->match(['get', 'post'], 'add', 'Clearance::add_clearance');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Clearance::edit_clearance/$1');
    $routes->delete('delete/(:num)', 'Clearance::delete_clearance/$1');
});
$routes->group('clearance-purposes', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'ClearancePurposes::index');
    $routes->get('(:num)', 'ClearancePurposes::index/$1');
    $routes->get('show/(:num)', 'ClearancePurposes::show_clearancepurpose/$1');
    $routes->match(['get', 'post'], 'add', 'ClearancePurposes::add_clearancepurpose');
    $routes->match(['get', 'post'], 'edit/(:num)', 'ClearancePurposes::edit_clearancepurpose/$1');
    $routes->delete('delete/(:num)', 'ClearancePurposes::delete_clearancepurpose/$1');
});
