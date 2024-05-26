<?php

global $router;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/product/[i:id]', [ProductController::class, 'show'], 'products.show');

$router->get('/cart', [CartController::class, 'index'], 'cart.index');
$router->post('/cart', [CartController::class, 'store'], 'cart.store');
$router->delete('/cart/[i:id]', [CartController::class, 'delete'], 'cart.delete');

$router->post('/checkout', [CheckoutController::class, 'pay'], 'checkout.pay')->only('auth');
$router->post('/callback', [CheckoutController::class, 'callback'], 'checkout.callback')->only('auth');
$router->get('/order/[i:id]', [OrderController::class, 'show'], 'order.show')->only('auth');