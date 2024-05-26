<?php

use App\Http\Controllers\Admin\HomeController;

$router->get('/admlara', [HomeController::class, 'index'], 'admin.home')->only('admin');