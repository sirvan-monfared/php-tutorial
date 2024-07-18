<?php

namespace App\Models;

use App\Traits\HasImage;

class Category extends Model
{
    use HasImage;

    protected string $table = 'categories';
    protected bool $timestamps = false;

    protected string $default_image = 'front/svg/2/1.svg';

    const RULES = [
        'name' => ['required'],
        'slug' => ['required']
    ];

    const NAMES = [
        'name' => 'نام دسته',
        'slug' => 'نامک'
    ];


    public function insert(array $data, ?string $image_name = ''): ?Category
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'featured_image' => $image_name
        ]);
    }

    public function revise(array $data, ?string $image_name = ''): Category
    {
        return $this->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
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