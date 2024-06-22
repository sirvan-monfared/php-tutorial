<?php

use App\Http\Controllers\Dashboard\OrderController;

$router->get('/dashboard/order', [OrderController::class, 'index'], 'dashboard.order.index')->only('auth');
$router->get('/order/[i:id]', [OrderController::class, 'show'], 'dashboard.order.show')->only('auth');