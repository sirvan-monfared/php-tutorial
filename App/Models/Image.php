<?php

namespace App\Models;

use App\Core\Database;

class Image extends Model
{
    protected string $table = 'images';
    protected bool $timestamps = false;

    public function insert(int $product_id, string $path): ?Image
    {
        return $this->create([
            'product_id' => $product_id,
            'path' => $path
        ]);
    }

    public function forProduct(int $product_id): bool|array
    {
        return $this->whereAll('product_id', $product_id);
    }

    public function path(): string
    {
        return asset("uploads/$this->path");
    }

    public function deleteAllForProduct(int $product_id): Database
    {
        $sql = "DELETE FROM {$this->table} WHERE `product_id`=:product_id";

        return $this->db->prepare($sql, [
            'product_id' => $product_id
        ]);
    }
}