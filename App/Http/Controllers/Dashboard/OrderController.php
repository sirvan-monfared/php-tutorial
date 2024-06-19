<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;

class OrderController extends BaseController
{
    public function index(): void
    {
        $this->view('dashboard.order.index', [
             'orders' => []
        ]);
    }
}