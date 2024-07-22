<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Model;
use App\Models\Product;

class HomeController extends BaseController
{
    public function index(): void
    {
        $this->view('front.home', [
            'products' => (new Product)->all(limit: 4, order_by: "RAND()"),
            'categories' => (new Category)->all(),
            'top_purchased' => (new Product)->topPurchased(limit: 4),
            'most_recent' => (new Product)->all(limit: 4, order_by: "id DESC"),
        ]);
    }
}