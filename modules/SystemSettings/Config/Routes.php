<?php
$routes->group('reservation-fees', ['namespace' => 'Modules\SystemSettings\Controllers'], function($routes)
{
    $routes->get('/', 'ReservationFees::index');
    $routes->get('(:num)', 'ReservationFees::index/$1');
    $routes->get('show/(:num)', 'ReservationFees::show_reservation_fees/$1');
    $routes->match(['get', 'post'], 'add', 'ReservationFees::add_reservation_fees');
    $routes->match(['get', 'post'], 'edit/(:num)', 'ReservationFees::edit_reservation_fees/$1');
    $routes->delete('delete/(:num)', 'ReservationFees::delete_reservation_fees/$1');
});
