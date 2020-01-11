<?php
$routes->group('blotters', ['namespace' => 'Modules\BlotterManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Blotters::index');
    $routes->get('(:num)', 'Blotters::index/$1');
    $routes->get('show/(:num)', 'Blotters::show_blotter/$1');
  //  $routes->get('own/(:num)', 'Blotters::user_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Blotters::add_blotter');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Blotters::edit_blotter/$1');
    $routes->delete('delete/(:num)', 'Blotters::delete_blotter/$1');
});

// $routes->group('blotter_actions', ['namespace' => 'Modules\BlotterManagement\Controllers'], function($routes)
// {
//     $routes->get('/', 'BlotterActions::index');
//     $routes->get('(:num)', 'BlotterActions::index/$1');
//     $routes->get('show/(:num)', 'BlotterActions::show_blotter_actions/$1');
//   //  $routes->get('own/(:num)', 'Blotters::user_own_profile/$1');
//     //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
//     $routes->match(['get', 'post'], 'add', 'BlotterActions::add_blotter_actions');
//     $routes->match(['get', 'post'], 'edit/(:num)', 'BlotterActions::edit_blotter_actions/$1');
//     $routes->delete('delete/(:num)', 'BlotterActions::delete_blotter_actions/$1');
// });
