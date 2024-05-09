<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/product/[i:id]', [ProductController::class, 'show'], 'products.show');

$router->get('/cart', [CartController::class, 'index'], 'cart.index');
$router->post('/cart', [CartController::class, 'store'], 'cart.store');

$router->get('/checkout', [CheckoutController::class, 'pay'], 'checkout.pay')->only('auth');
$router->post('/callback', [CheckoutController::class, 'callback'], 'checkout.callback')->only('auth');
$router->get('/order/[i:id]', [OrderController::class, 'show'], 'order.show')->only('auth');


//$router->get('/test', [TestController::class, 'index'], 'test');
//$router->post('/test/callback', [TestController::class, 'callback']);
include (base_path('routes/auth.php'));