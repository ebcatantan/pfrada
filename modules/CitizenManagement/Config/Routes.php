<?php
$routes->group('citizens', ['namespace' => 'Modules\CitizenManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Citizen::index');
    $routes->get('(:num)', 'Citizen::index/$1');
    $routes->get('show/(:num)', 'Citizen::show_citizen/$1');
    $routes->get('own/(:num)', 'Citizen::citizen_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Citizen::add_citizen');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Citizen::edit_citizen/$1');
    $routes->delete('delete/(:num)', 'Citizen::delete_citizen/$1');
});
