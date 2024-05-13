<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

$router->get('/register', [RegisterController::class, 'create'], 'auth.register')->only('guest');
$router->post('/register', [RegisterController::class, 'store'], 'auth.register.store')->only('guest');

$router->get('/logins', [LoginController::class, 'create'], 'auth.login')->only('guest');
$router->post('/logins', [LoginController::class, 'store'], 'auth.login.store')->only('guest');
$router->delete('/logins', [LoginController::class, 'logout'], 'auth.logout')->only('auth');