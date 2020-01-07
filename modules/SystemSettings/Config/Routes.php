<?php
$routes->group('clearance-purposes', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'ClearancePurposes::index');
    $routes->get('(:num)', 'ClearancePurposes::index/$1');
    $routes->get('show/(:num)', 'ClearancePurposes::show_clearancepurpose/$1');
    $routes->match(['get', 'post'], 'add', 'ClearancePurposes::add_clearancepurpose');
    $routes->match(['get', 'post'], 'edit/(:num)', 'ClearancePurposes::edit_clearancepurpose/$1');
    $routes->delete('delete/(:num)', 'ClearancePurposes::delete_clearancepurpose/$1');
});
