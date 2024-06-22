<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController
{
    public function show(string $slug)
    {
        $category = (new Category)->where('slug', urldecode($slug));

        if (! $category) {
            abort();
        }

        $paginated = (new Product)->forCategory($category->id);

        $this->view('front.category.show', [
            'category' => $category,
            'products' => $paginated->items,
            'paginator' => $paginated->paginator
        ]);
    }
}