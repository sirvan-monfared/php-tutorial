<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

$router->get('/register', [RegisterController::class, 'create'], 'auth.register')->only('guest');
$router->post('/register', [RegisterController::class, 'store'], 'auth.register.store')->only('guest');

$router->get('/login', [LoginController::class, 'create'], 'auth.login')->only('guest');
$router->post('/login', [LoginController::class, 'store'], 'auth.login.store')->only('guest');
$router->delete('/login', [LoginController::class, 'logout'], 'auth.logout')->only('auth');