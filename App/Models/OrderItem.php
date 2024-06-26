<?php

namespace App\Models;

class OrderItem extends Model
{
    protected string $table = 'order_items';
    protected bool $timestamps = false;

    protected ?Product $product = null;
    protected ?Order $order = null;

    public function insert(int $order_id, array $item)
    {
        return $this->create([
            'order_id' => $order_id,
            'product_id' => $item['id'],
            'quantity' => $item['qty'],
            'unit_price' => $item['price'],
        ]);
    }

    public function forOrder($order_id): array
    {
        $sql = "SELECT oi.*, p.name AS product_name FROM {$this->table} oi
                LEFT JOIN `products` p 
                    ON oi.product_id = p.id
                WHERE oi.`order_id`=:order_id";

        return $this->db->prepare($sql, [
            'order_id' => $order_id
        ], __CLASS__)->all();
    }

    public function product(): ?Product
    {
        if (! $this->product) {
            $this->product = (new Product)->find($this->product_id);
        }

        return $this->product;
    }

    public function order(): ?Order
    {
        if (! $this->order) {
            $this->order = (new Order)->find($this->order_id);
        }

        return $this->order;
    }
}