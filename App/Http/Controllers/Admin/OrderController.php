<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Order;
use App\Models\Shipment;
use Exception;

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

    public function update(int $id): void
    {
        $order = (new Order())->findOrFail($id);

        $validation = new Validator($_POST, ['status' => ['required']], ['status' => 'وضعیت سفارش']);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $order->updateStatus($_POST);

            if ($order->isPaid() && ! $order->hasShipment()) {
                $order->createNewShipment();
            }

            Session::success();
            redirectBack();
        } catch (Exception $e) {
            $this->redirectWithErrors();
        }
    }

    public function updateShipment(int $id): void
    {
        $order = (new Order())->findOrFail($id);

        $shipment = $order->shipment();

        if (! $shipment || ! $order->isPaid()) {
            abort();
        }

        $validation = new Validator($_POST, ['status' => ['required']], ['status' => 'وضعیت ارسال']);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $shipment->revise($_POST);

            Session::success();
            redirectBack();
        } catch(Exception $e) {
            $this->redirectWithErrors();
        }
    }
}