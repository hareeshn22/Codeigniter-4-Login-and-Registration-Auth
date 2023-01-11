<?php


$routes->group("admin", ['filter' => 'auth'], function ($routes) {

    $routes->get('/', 'Login::dashboard', ['as' => 'admin']);

    

});
