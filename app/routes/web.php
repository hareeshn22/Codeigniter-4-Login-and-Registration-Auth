<?php

$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login/valid', 'Login::loginValidate', ['as' => 'loginp']);


$routes->get('/register', 'Register::index', ['as' => 'register']);
$routes->post('/register/valid', 'Register::store', ['as' => 'registerp']);


$routes->get('logout', 'Login::logout', ['as' => 'logout']);

