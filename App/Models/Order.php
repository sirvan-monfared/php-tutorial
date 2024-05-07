<?php

namespace App\Models;

use App\Core\Database;

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

    public function updatePaymentInfo($ref_id, $payment_order_id, $gateway_code, $order_id): Database
    {
        $sql = "UPDATE {$this->table} SET `gateway`=:gateway, `ref_id`=:ref_id, payment_order_id=:payment_order_id WHERE `id`=:id";

        return $this->db->prepare($sql, [
            'gateway' => $gateway_code,
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id,
            'id' => $order_id
        ]);
    }

    public function findByPaymentInfo($ref_id, $payment_order_id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `ref_id`=:ref_id AND `payment_order_id`=:payment_order_id LIMIT 1";

        return $this->db->prepare($sql, [
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id
        ], __CLASS__)->find();
    }
}