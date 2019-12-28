<?php 
$routes->group('users', ['namespace' => 'Modules\UserManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Users::index');
    $routes->get('(:num)', 'Users::index/$1');
    $routes->get('show/(:num)', 'Users::show_user/$1');
    $routes->get('own/(:num)', 'Users::user_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'Users::user_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Users::add_user');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Users::edit_user/$1');
    $routes->delete('delete/(:num)', 'Users::delete_user/$1');
});
    
$routes->group('roles', ['namespace' => 'Modules\UserManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Roles::index');
    $routes->match(['get', 'post'], 'add', 'Roles::add_role');
    $routes->get('(:num)', 'Roles::index/$1');
    $routes->get('show/(:num)', 'Roles::show_role/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Roles::edit_role/$1');
    $routes->delete('delete/(:num)', 'Roles::delete_role/$1');
}); 

$routes->group('permissions', ['namespace' => 'Modules\UserManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Permissions::index');
    $routes->match(['get', 'post'], 'edit', 'Permissions::edit_permission');
});
   