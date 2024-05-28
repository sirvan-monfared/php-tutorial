<?php

namespace App\Models;

class Product extends Model
{
    protected string $table = 'products';

    public function showPrice(): string
    {
        return priceFormat($this->price);
    }

    public function discount()
    {
        if (! $this->prev_price) return 0;

        $discount = (($this->prev_price - $this->price) / $this->prev_price) * 100;

        return round($discount);
    }

    public function viewLink(): string
    {
        return route('products.show', ['id' => $this->id]);
    }

    public function editLink(): string
    {
        return route('admin.product.edit', ['id' => $this->id]);
    }
}