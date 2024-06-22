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


    public function insert(array $data): ?Category
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $data['slug']
        ]);
    }

    public function revise(array $data): Category
    {
        return $this->update([
            'name' => $data['name'],
            'slug' => $data['slug']
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