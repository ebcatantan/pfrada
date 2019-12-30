<?php
$routes->group('facilities', ['namespace' => 'Modules\BaranggaySettings\Controllers'], function($routes)
{
    $routes->get('/', 'Facilities::index');
    $routes->get('(:num)', 'Facilities::index/$1');
    $routes->get('show/(:num)', 'Facilities::show_facility/$1');
    $routes->match(['get', 'post'], 'add', 'Facilities::add_facility');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Facilities::edit_facility/$1');
    $routes->delete('delete/(:num)', 'Facilities::delete_facility/$1');
});
