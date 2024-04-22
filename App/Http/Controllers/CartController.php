<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Product;

class CartController extends BaseController
{
    public function store()
    {
        $product = (new Product)->findOrFail($_POST['product_id']);

        cart()->add($product);

        redirectTo($product->viewLink());
    }
}