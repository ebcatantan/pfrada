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

$routes->group('documents', ['namespace' => 'Modules\BaranggaySettings\Controllers'], function($routes)
{
    $routes->get('/', 'Documents::index');
    $routes->get('(:num)', 'Documents::index/$1');
    $routes->get('show/(:num)', 'Documents::show_document/$1');
    $routes->match(['get', 'post'], 'add', 'Documents::add_document');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Documents::edit_document/$1');
    $routes->delete('delete/(:num)', 'Documents::delete_document/$1');
});


$routes->group('brgy-officials', ['namespace' => 'Modules\BaranggaySettings\Controllers'], function($routes)
{
    $routes->get('/', 'BarangayOfficial::index');
    $routes->get('(:num)', 'BarangayOfficial::index/$1');
    $routes->get('show/(:num)', 'BarangayOfficial::show_barangayofficial/$1');
    $routes->match(['get', 'post'], 'add', 'BarangayOfficial::add_barangayofficial');
    $routes->match(['get', 'post'], 'edit/(:num)', 'BarangayOfficial::edit_barangayofficial/$1');
    $routes->delete('delete/(:num)', 'BarangayOfficial::delete_barangayofficial/$1');
});

$routes->group('document-requests', ['namespace' => 'Modules\BaranggaySettings\Controllers'], function($routes)
{
    $routes->get('/', 'DocumentRequest::index');
    $routes->get('(:num)', 'DocumentRequest::index/$1');
    $routes->get('show/(:num)', 'DocumentRequest::show_documentrequest/$1');
    $routes->match(['get', 'post'], 'add', 'DocumentRequest::add_documentrequest');
    $routes->match(['get', 'post'], 'edit/(:num)', 'DocumentRequest::edit_documentrequest/$1');
    $routes->delete('delete/(:num)', 'DocumentRequest::delete_documentrequest/$1');

});
