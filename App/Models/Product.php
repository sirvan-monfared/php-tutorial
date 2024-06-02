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

    public function insert(array $data, ?string $image_name = ''): ?Product
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'prev_price' => $data['prev_price'] ?: null,
            'stock' => $data['stock'],
            'description' => $data['description'],
            'featured_image' => $image_name
        ]);
    }

    public function revise(array $data, ?string $image_name = ''): Product
    {
        return $this->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'prev_price' => $data['prev_price'] ?: null,
            'stock' => $data['stock'],
            'description' => $data['description'],
            'featured_image' => $image_name
        ]);
    }

    public function featuredImage(): string
    {
        if (! $this->featured_image) return '';

        return  asset("uploads/$this->featured_image");
    }

    public function featuredImageOrDefault(): string
    {
        return $this->featuredImage() ?: $this->defaultFeaturedImage();
    }

    public function featuredImagePath(): string
    {
        if (! $this->featured_image) return '';

        return base_path('public/assets/uploads/') . $this->featured_image;
    }

    public function defaultFeaturedImage(): string
    {
        return asset('front/images/default-product.jpg');
    }

    public function hasFeaturedImage(): bool
    {
        return ($this->featuredImage() && $this->featuredImagePath() && is_file($this->featuredImagePath()));
    }

    public function paginate($per_page = 10, $page_no = 1)
    {
        $offset = ($page_no - 1) * $per_page;

        $sql = "SELECT * FROM {$this->table} LIMIT {$per_page} OFFSET {$offset}";

        return $this->db->prepare($sql, [], Product::class)->all();
    }
}