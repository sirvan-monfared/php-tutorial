<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Models\Order;

class OrderController extends BaseController
{
    public function index(): void
    {
        $this->view('dashboard.order.index', [
             'orders' => auth()->user()->paidOrders()
        ]);
    }

    public function show(int $id)
    {
        $order = (new Order)->find($id);

        if (! $order) {
            abort();
        }

        authorize($order->user_id === auth()->user()->id);

        $this->view('dashboard.order.show', [
            'order' => $order
        ]);
    }
}