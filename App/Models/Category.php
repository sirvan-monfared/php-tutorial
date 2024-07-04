<?php

namespace App\Models;

class Category extends Model
{
    protected string $table = 'categories';
    protected bool $timestamps = false;

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
        return asset('front/svg/2/1.svg');
    }

    public function hasFeaturedImage(): bool
    {
        return ($this->featuredImage() && $this->featuredImagePath() && is_file($this->featuredImagePath()));
    }
}