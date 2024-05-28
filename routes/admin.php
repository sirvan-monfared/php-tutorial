<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;

$router->get('/admlara', [HomeController::class, 'index'], 'admin.home')->only('admin');

$router->get('/admlara/category', [CategoryController::class, 'index'], 'admin.category.index')->only('admin');
$router->get('/admlara/category/create',  [CategoryController::class, 'create'], 'admin.category.create')->only('admin');
$router->post('/admlara/category',  [CategoryController::class, 'store'], 'admin.category.store')->only('admin');
$router->get('/admlara/category/[i:id]/edit',  [CategoryController::class, 'edit'], 'admin.category.edit')->only('admin');
$router->put('/admlara/category/[i:id]',  [CategoryController::class, 'update'], 'admin.category.update')->only('admin');