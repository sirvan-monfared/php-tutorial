<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\Sluggable;

class Category extends Model
{
    use HasImage;
    use Sluggable;

    protected string $table = 'categories';
    protected bool $timestamps = false;

    protected string $default_image = 'front/svg/2/1.svg';

    const RULES = [
        'name' => ['required']
    ];

    const NAMES = [
        'name' => 'نام دسته'
    ];

    public function insert(array $data, ?string $image_name = ''): ?Category
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $this->slugify($data['slug'] ?: $data['name']),
            'featured_image' => $image_name
        ]);
    }

    public function revise(array $data, ?string $image_name = ''): Category
    {
        $slug = $data['slug'] ?: $data['name'];
        $slug = ($data['slug'] !== $this->slug) ? $this->slugify($slug, except_id: $this->id) : $this->slug;

        return $this->update([
            'name' => $data['name'],
            'slug' => $slug,
            'featured_image' => $image_name ?: $this->featured_image
        ]);
    }

    public function editLink(): string
    {
        return route('admin.category.edit', ['id' => $this->id]);
    }

    public function viewLink(): string
    {
        return route('category.show', ['slug' => $this->slug]);
    }
}