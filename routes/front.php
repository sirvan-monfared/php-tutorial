<?php

global $router;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

$router->get('/', [HomeController::class, 'index'], 'home');

$router->get('/product/[i:id]', [ProductController::class, 'show'], 'products.show');
$router->post('/product/[i:id]/comment', [CommentController::class, 'store'], 'comment.store')->only('auth');

$router->get('/category/[:slug]', [CategoryController::class, 'show'], 'category.show');

$router->get('/cart', [CartController::class, 'index'], 'cart.index');
$router->post('/cart', [CartController::class, 'store'], 'cart.store');
$router->delete('/cart/[i:id]', [CartController::class, 'delete'], 'cart.delete');

$router->post('/checkout', [CheckoutController::class, 'pay'], 'checkout.pay')->only('auth');
$router->post('/callback', [CheckoutController::class, 'callback'], 'checkout.callback')->only('auth');
