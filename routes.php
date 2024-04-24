<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/product/[i:id]', [ProductController::class, 'show'], 'products.show');

$router->get('/cart', [CartController::class, 'index'], 'cart.index');
$router->post('/cart', [CartController::class, 'store'], 'cart.store');

$router->get('/checkout', [CheckoutController::class, 'pay'], 'checkout.pay')->only('auth');


$router->get('/register', [RegisterController::class, 'create'], 'auth.register')->only('guest');
$router->post('/register', [RegisterController::class, 'store'], 'auth.register.store')->only('guest');

$router->get('/login', [LoginController::class, 'create'], 'auth.login')->only('guest');
$router->post('/login', [LoginController::class, 'store'], 'auth.login.store')->only('guest');
$router->delete('/login', [LoginController::class, 'logout'], 'auth.logout')->only('auth');