<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends BaseController
{
    public function show(int $id)
    {
        $order = (new Order)->find($id);

        if (! $order) {
            abort();
        }

        authorize($order->user_id === auth()->user()->id);

        $this->view('front.orders.show', [
            'order' => $order
        ]);
    }
}