<?php

namespace App\Models;

class OrderItem extends Model
{
    protected string $table = 'order_items';

    public function insert(int $order_id, array $item)
    {
        $sql = "INSERT INTO `{$this->table}` 
                (`order_id`, `product_id`, `quantity`, `unit_price`)
                VALUES 
                (:order_id, :product_id, :quantity, :unit_price)";

        $this->db->prepare($sql, [
            'order_id' => $order_id,
            'product_id' => $item['id'],
            'quantity' => $item['qty'],
            'unit_price' => $item['price'],
        ]);
    }
}