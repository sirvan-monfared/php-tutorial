<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends BaseController
{
    public function index(): void
    {
        $this->view('front.home', [
            'products' => (new Product)->all()
        ]);
    }
}