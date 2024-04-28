<?php

namespace App\Composers;

use App\Models\Category;

class CategoriesComposer
{
    public function composer($view): void
    {
        $view->share([
            'categories' => (new Category)->all(6)
        ]);
    }
}