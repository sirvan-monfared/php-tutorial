<?php

namespace App\Models;

class Order extends Model
{
    protected string $table = 'orders';

    const NOT_PAID = 1;

    public function insert($amount)
    {
        $sql = "INSERT INTO `{$this->table}` 
                (`user_id`, `shipment_id`, `amount`, `gateway`, `status`, `created_at`, `updated_at`)
                VALUES 
                (:user_id, :shipment_id, :amount, :gateway, :status, :created_at, :updated_at)";

        $this->db->prepare($sql, [
            'user_id' => auth()->user()->id,
            'shipment_id' => null,
            'amount' => $amount,
            'gateway' => null,
            'status' => Order::NOT_PAID,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return $this->db->lastInsertedId();
    }
}