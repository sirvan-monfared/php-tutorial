<?php

namespace App\Http\Controllers;

use App\Helpers\Gateway;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends BaseController
{
    public function pay()
    {
        $order_id = (new Order)->insert(cart()->sum());

        if (!$order_id) {
            // TODO :: show error message to user
            redirectBack();
        }

        foreach (cart()->all() as $item) {
            (new OrderItem)->insert($order_id, $item);
        }

        // TODO :: generate random payment order id
        $payment_order_id = 5646544;
        $gateway = new Gateway(true);
        $response = $gateway->start($payment_order_id);

        $httpCode = $response['httpCode'];
        $result = $response['result'];

        if ($httpCode === 201 && $result->link) {

            (new Order)->updatePaymentInfo($result->id, $payment_order_id, $gateway->code(), $order_id);

            redirectTo($result->link);
        }
    }

    public function callback()
    {
        $gateway =  new Gateway(true);

        $order = (new Order)->findByPaymentInfo($_POST['id'], $_POST['order_id']);

        dd($order);

        $response = $gateway->verify($_POST['id'], $_POST['order_id']);

        $result = $response['result'];
        $httpCode = $response['httpCode'];

        if ($httpCode === 200 && $result->status === 100) {
            dd('yessss');
        } else {
            dd('noo');
        }
    }
}