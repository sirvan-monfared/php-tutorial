<?php

namespace App\Models;

use App\Core\Paginator;

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
            'featured_image' => $image_name ?: $this->featured_image
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

    public function filtered(array $data): object
    {
        $sql = "SELECT * FROM {$this->table} WHERE 1";
        $values = [];

        if ($data['name'] ?? false) {
            $sql .= " AND `name` LIKE :name";
            $values['name'] = '%'.$data['name'].'%';
        }
        if ($data['price_from'] ?? false) {
            $sql .= " AND `price` >= :price_from";
            $values['price_from'] = $data['price_from'];
        }
        if ($data['price_to'] ?? false) {
            $sql .= " AND `price` <= :price_to";
            $values['price_to'] = $data['price_to'];
        }
        if ($data['stock_from'] ?? false) {
            $sql .= " AND `stock` >= :stock_from";
            $values['stock_from'] = $data['stock_from'];
        }
        if ($data['stock_to'] ?? false) {
            $sql .= " AND `stock` <= :stock_to";
            $values['stock_to'] = $data['stock_to'];
        }
        if ($data['category_id'] ?? false) {
            $sql .= " AND `category_id`=:category_id";
            $values['category_id'] = $data['category_id'];
        }

        return $this->db->paginate($sql, $values, __CLASS__);
    }

    public function forCategory($category_id, $except_id = 0, $randomOrder = false): object
    {
        $sql = "SELECT * FROM {$this->table} WHERE category_id=:category_id AND id!=:except_id";

        if ($randomOrder) {
            $sql .= " ORDER BY RAND()";
        } else {
            $sql .= " ORDER BY `id` DESC";
        }

        return $this->db->paginate($sql, [
            'category_id' => $category_id,
            'except_id' => $except_id
        ], __CLASS__);
    }

    public function total()
    {
        $sql = "SELECT COUNT(`id`) AS count FROM {$this->table} LIMIT 1";

        return $this->db->prepare($sql, [], __CLASS__)->find()->count;
    }

    public function customFields(): bool|array
    {
        return (new CustomField())->forProduct($this->id);
    }

    public function clearCustomFields(): void
    {
        (new CustomField())->clearForProduct($this->id);
    }

    public function comments(): bool|array
    {
        return (new Comment)->forProduct($this->id);
    }

    public function topPurchased(int $limit)
    {
        return (new Order)->topPurchasedProducts($limit);
    }
}