<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

$router->get('/admlara', [HomeController::class, 'index'], 'admin.home')->only('admin');

$router->resource('/admlara/category', CategoryController::class, 'admin.category', 'admin');

$router->resource('/admlara/product', ProductController::class, 'admin.product', 'admin');

$router->resource('/admlara/users', UserController::class, 'admin.user', 'admin');
