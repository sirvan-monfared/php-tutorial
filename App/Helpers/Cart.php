<?php

namespace App\Helpers;

use App\Core\Session;
use App\Models\Product;
use Illuminate\Support\Collection;

class Cart
{
    protected Collection $items;

    public function __construct()
    {
        if (Session::has('cart')) {
            $this->items = Session::get('cart');
        } else {
            $this->items = collect([]);
        }
    }

    public function add(Product $product)
    {
        $result = $this->items->where('id', '=', $product->id)->first();

        if ($result) {
            $this->items = $this->items->map(function($item) use ($product) {
                if ($product->id === $item['id']) {
                    $item['qty'] = $item['qty'] + 1;
                }

                return $item;
            });
        } else {
            $this->items->push([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => 1
            ]);
        }

        $this->syncSession();
    }

    public function all()
    {
        return $this->items;
    }

    public function sum()
    {
        return $this->items->sum(fn($item) => $item['price'] * $item['qty']);
    }

    public function count()
    {
        return $this->items->count();
    }

    public function clear(): void
    {
        $this->items = collect([]);

        $this->syncSession();
    }

    protected function syncSession(): void
    {
        Session::put('cart', $this->all());
    }

    public function delete(int $id): void
    {
        $this->items = cart()->all()->reject(fn($item) => $item['id'] === $id);

        $this->syncSession();
    }
}