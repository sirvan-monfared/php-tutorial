<?php

namespace App\Models;

class Category extends Model
{
    protected string $table = 'categories';
    protected bool $timestamps = false;


    public function insert(array $data): ?Category
    {
        return $this->create([
            'name' => $data['name'],
            'slug' => $data['slug']
        ]);
    }
}