<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

$router->get('/admlara', [HomeController::class, 'index'], 'admin.home')->only('admin');

$router->resource('/admlara/category', CategoryController::class, 'admin.category', 'admin');

$router->resource('/admlara/product', ProductController::class, 'admin.product', 'admin');
