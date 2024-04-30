<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends BaseController
{
    public function pay()
    {
        $order_id = (new Order)->insert(cart()->sum());

        if (! $order_id) {
            // TODO :: show error message to user
            redirectBack();
        }

       foreach(cart()->all() as $item) {
            (new OrderItem)->insert($order_id, $item);
       }

    }
}