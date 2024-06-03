<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Order;
use App\Models\Shipment;

class OrderController extends BaseController
{
    public function index(): void
    {
        $this->view('admin.order.index', [
            'orders' => (new Order)->all()
        ]);
    }

    public function show(int $id): void
    {
        $order = (new Order())->findOrFail($id);

        $this->view('admin.order.show', [
            'order' => $order
        ]);
    }

    public function edit(int $id): void
    {
        $order = (new Order())->findOrFail($id);

        $this->view('admin.order.edit', [
            'order' => $order
        ]);
    }

    public function update(int $id)
    {
        $order = (new Order())->findOrFail($id);

        $validation = new Validator($_POST, ['status' => ['required']], ['status' => 'وضعیت سفارش']);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $order->updateStatus($_POST);

            // TODO :: refactor to model
            if ((int) $_POST['status'] === Order::PAID && ! $order->hasShipment()) {
                $shipment = (new Shipment)->create([
                    'user_id' => $order->user_id,
                    'address' => $order->user()?->address ?: 'تهران',
                    'status' => Shipment::PROCESSING
                ]);

                $order->update([
                    'shipment_id' => $shipment->id
                ]);
            }

            Session::success();
            redirectBack();
        } catch (\Exception $e) {
            $this->redirectWithErrors();
        }
    }
}