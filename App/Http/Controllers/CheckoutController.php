<?php

namespace App\Http\Controllers;

use App\Core\Session;
use App\Helpers\Gateway;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipment;

class CheckoutController extends BaseController
{
    public function pay(): void
    {
        $order = (new Order)->insert(cart()->sum());

        if (! $order) {
            Session::warning('متاسفانه مشکلی در ثبت پرداخت شما بوجود آمد. لطفا چند دقیقه بعد تلاش کنید');
            redirectBack();
        }

        foreach (cart()->all() as $item) {
            (new OrderItem)->insert($order->id, $item);
        }

        $payment_order_id = generateRandom();
        $gateway = new Gateway(true);
        $response = $gateway->start($payment_order_id);

        $httpCode = $response['httpCode'];
        $result = $response['result'];

        if ($httpCode === 201 && $result->link) {

            $order->updatePaymentInfo($result->id, $payment_order_id, $gateway->code());

            redirectTo($result->link);
        }

        Session::warning('امکان اتصال به درگاه پرداخت وجود ندارد');
        redirectBack();
    }

    public function callback()
    {
        $gateway =  new Gateway(true);

        $order = (new Order)->findByPaymentInfo($_POST['id'], $_POST['order_id']);

        if (! $order) {
            Session::warning('مشخصات پرداخت معتبر نمیباشد');

            redirectTo(route('cart.index'));
        }

        $response = $gateway->verify($order->ref_id, $order->payment_order_id);
        $result = $response['result'];
        $httpCode = $response['httpCode'];


        if ($httpCode === 200 && $result->status === 100) {
            Session::success('با تشکر. پرداخت شما با موفقیت انجام شد و سفارش شما در حال پردازش میباشد');

            $order->changeStatusToPaid($result->payment->track_id);

            // TODO :: force user to fill address before payment
            // TODO :: refactor to model
            $shipment = (new Shipment)->create([
                'user_id' => auth()->user()->id,
                'address' => auth()->user()->address ?: 'تهران',
                'status' => Shipment::PROCESSING
            ]);

            $order->update([
                'shipment_id' => $shipment->id
            ]);

            cart()->clear();
        } else {
            Session::warning('متاسفانه مشکلی در عملیات پرداخت شما بوجود آمد');



            $order->changeStatusToFailed($_POST['track_id']);
        }

        redirectTo(route('order.show', ['id' => $order->id]));
    }
}