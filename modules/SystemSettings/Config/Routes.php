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
