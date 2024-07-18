<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\HasImage;

class Product extends Model
{
    use HasImage, Filterable {
        HasImage::featuredImage insteadof Filterable;
    }

    protected string $table = 'products';

    protected string $default_image = 'front/images/default-product.jpg';

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
            'featured_image' => $image_name,
            'seo_title' => $data['seo_title'],
            'seo_description' => $data['seo_description'],
            'seo_keywords' => $data['seo_keywords']
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
            'featured_image' => $image_name ?: $this->featured_image,
            'seo_title' => $data['seo_title'],
            'seo_description' => $data['seo_description'],
            'seo_keywords' => $data['seo_keywords']
        ]);
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

    public function galleryImages(): bool|array
    {
        if (! $this->id) return [];

        return (new Image())->forProduct($this->id);
    }

    public function search(array $data): object
    {
        $sql = "SELECT * FROM {$this->table} WHERE 1 ";
        $values = [];

        if ($data['keyword'] ?? false) {
            $sql .= " AND name LIKE :name ";
            $values['name'] = "%" . trim($data['keyword']) . "%";
        }

        if ($data['price_from'] ?? false) {
            $sql .= " AND price >= :price_from ";
            $values['price_from'] = trim($data['price_from']);
        }

        if ($data['price_to'] ?? false) {
            $sql .= " AND price <= :price_to ";
            $values['price_to'] = trim($data['price_to']);
        }

        if ($data['category_id'] ?? false) {
            $sql .= " AND category_id IN (";
            foreach($data['category_id'] as $index => $category_id) {
                $sql .= ":cat_{$index},";
                $values["cat_{$index}"] = $category_id;
            }

            $sql = rtrim($sql, ",") . ")";
        }

        if ($data['order'] ?? false) {
           switch ($data['order']) {
               case 'price_desc':
                   $sql .= "ORDER BY price DESC";
                   break;
               case 'price_asc':
                   $sql .= "ORDER BY price ASC";
                   break;
               case 'default':
               case 'date_desc':
                   $sql .= "ORDER BY id DESC";
                   break;
               case 'date_asc':
                   $sql .= "ORDER BY id ASC";
                   break;
           }
        } else {
            $sql .= "ORDER BY id DESC";
        }

        return $this->db->paginate($sql, $values, __CLASS__);
    }

    public function deleteAllGalleryImages(): void
    {
        (new Image)->deleteAllForProduct($this->id);
    }

    public function averageRating(): int
    {
        return (new Comment)->averageRatingForProduct($this->id);
    }

    public function commentsCount(): int
    {
        return (new Comment)->countForProduct($this->id);
    }
}