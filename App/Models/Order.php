<?php

namespace App\Models;

use App\Core\Database;

class Order extends Model
{
    protected string $table = 'orders';

    protected array $order_items = [];

    const NOT_PAID = 1;
    const PAID = 2;
    const FAILED = 3;

    public function insert($amount): ?Order
    {
        return $this->create([
            'user_id' => auth()->user()->id,
            'shipment_id' => null,
            'amount' => $amount,
            'gateway' => null,
            'status' => Order::NOT_PAID
        ]);
    }

    public function updatePaymentInfo($ref_id, $payment_order_id, $gateway_code): Order
    {
        return $this->update([
            'gateway' => $gateway_code,
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id,
            'updated_at' => now(),
            'id' => $this->id
        ]);
    }

    public function findByPaymentInfo($ref_id, $payment_order_id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `ref_id`=:ref_id AND `payment_order_id`=:payment_order_id AND status=:status LIMIT 1";

        return $this->db->prepare($sql, [
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id,
            'status' => ORDER::NOT_PAID
        ], __CLASS__)->find();
    }

    public function items(): array
    {
        if (! $this->order_items) {
            $this->order_items = (new OrderItem())->forOrder($this->id);
        }

        return $this->order_items;
    }

    public function changeStatusToPaid(string $track_id): static
    {
        return $this->update([
            'status' => Order::PAID,
            'track_id' => $track_id,
            'updated_at' => now(),
            'id' => $this->id
        ]);
    }

    public function changeStatusToFailed(string $track_id): static
    {
        return $this->update([
            'status' => Order::FAILED,
            'track_id' => $track_id,
            'id' => $this->id
        ]);
    }

    public function isPaid(): bool
    {
        return $this->status === Order::PAID;
    }
}