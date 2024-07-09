<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class SearchController extends BaseController
{
    public function index()
    {
        $paginated = (new Product)->search($_GET);

        $this->view('front.search.index', [
            'categories' => (new Category)->all(),
            'products' => $paginated->items,
            'paginator' => $paginated->paginator
        ]);
    }
}