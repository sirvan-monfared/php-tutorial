<?php

use App\Http\Controllers\Dashboard\OrderController;

$router->get('/dashboard/order', [OrderController::class, 'index'], 'dashboard.order.index')->only('auth');