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

$routes->group('reservation-fees', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'ReservationFees::index');
    $routes->get('(:num)', 'ReservationFees::index/$1');
    $routes->get('show/(:num)', 'ReservationFees::show_reservation_fees/$1');
    $routes->match(['get', 'post'], 'add', 'ReservationFees::add_reservation_fees');
    $routes->match(['get', 'post'], 'edit/(:num)', 'ReservationFees::edit_reservation_fees/$1');
    $routes->delete('delete/(:num)', 'ReservationFees::delete_reservation_fees/$1');
});
