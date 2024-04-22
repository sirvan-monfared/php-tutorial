<?php

namespace App\Http\Controllers;

use App\Core\Session;
use App\Helpers\Cart;
use App\Models\Product;

class ProductController extends BaseController
{
    public function show(int $id): void
    {
        $product = (new Product)->findOrFail($id);

        $this->view('front.products.show', [
            'product' => $product
        ]);
    }
}