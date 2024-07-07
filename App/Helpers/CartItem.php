<?php

namespace App\Helpers;

use App\Models\Product;

class CartItem
{
    public function __construct(
        public int $id,
        public string $name,
        public mixed $price,
        public int $qty
    ) {
    }

    public function incrementQuantity()
    {
        $this->qty++;
    }

    public function totalPrice(): int
    {
        return $this->price * $this->qty;
    }

    public function product(): ?Product
    {
        return (new Product)->find($this->id);
    }
}
