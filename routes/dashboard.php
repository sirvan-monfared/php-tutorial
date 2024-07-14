<?php

use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\PasswordController;
use App\Http\Controllers\Dashboard\ProfileController;

$router->get('/dashboard/order', [OrderController::class, 'index'], 'dashboard.order.index')->only('auth');
$router->get('/dashboard/order/[i:id]', [OrderController::class, 'show'], 'dashboard.order.show')->only('auth');

$router->get('/dashboard/password/edit', [PasswordController::class, 'edit'], 'dashboard.password.edit')->only('auth');
$router->put('/dashboard/password/edit', [PasswordController::class, 'update'], 'dashboard.password.update')->only('auth');

$router->get('/dashboard/profile/edit', [ProfileController::class, 'edit'], 'dashboard.profile.edit')->only('auth');
$router->put('/dashboard/profile/edit', [ProfileController::class, 'update'], 'dashboard.profile.update')->only('auth');