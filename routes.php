<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/product/[i:id]', [ProductController::class, 'show'], 'products.show');

$router->post('/cart', [CartController::class, 'store'], 'cart.store');


$router->get('/register', [RegisterController::class, 'create'])->only('guest');
$router->post('/register', [RegisterController::class, 'store'])->only('guest');


$router->get('/login', [LoginController::class, 'create'])->only('guest');
$router->post('/login', [LoginController::class, 'store'])->only('guest');
$router->delete('/login', [LoginController::class, 'logout'])->only('auth');