<?php

namespace App\Models;

class CustomField extends Model
{
    protected string $table = 'product_custom_fields';
    protected bool $timestamps = false;

    public function forProduct($product_id): bool|array
    {
        return $this->whereAll('product_id', $product_id);
    }

    public function clearForProduct($product_id): void
    {
        $sql = "DELETE FROM {$this->table} WHERE `product_id`=:product_id";

        $this->db->prepare($sql, [
            'product_id' => $product_id
        ]);
    }
}