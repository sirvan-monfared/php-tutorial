<?php

namespace App\Models;

class Product extends Model
{
    protected string $table = 'products';

    const RULES = [
        'name' => ['required', 'min:3'],
        'slug' => ['required', 'min:3'],
        'category_id' => ['required'],
        'description' =>  ['required', 'min:5'],
        'price' => ['required']
    ];

    const NAMES = [
        'name' => 'نام محصول',
        'slug' => 'نامک محصول',
        'category_id' => 'دسته بندی',
        'description' =>  'توضیحات محصول',
        'price' => 'قیمت'
    ];

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

    public function insert(array $data): ?Product
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'prev_price' => $data['prev_price'],
            'stock' => $data['stock'],
            'description' => $data['description']
        ]);
    }

    public function revise(array $data): Product
    {
        return $this->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'prev_price' => $data['prev_price'],
            'stock' => $data['stock'],
            'description' => $data['description']
        ]);
    }
}