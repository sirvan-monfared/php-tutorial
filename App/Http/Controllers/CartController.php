<?php

namespace App\Http\Controllers;

use App\Core\Session;
use App\Helpers\Cart;
use App\Models\Product;

class CartController extends BaseController
{
    public function index()
    {
        $this->view('front.cart.index', [
            'items' => cart()->all()
        ]);
    }

    public function store(): void
    {
        $product = (new Product)->findOrFail($_POST['product_id']);

        cart()->add($product);

        Session::success('آیتم با موفقیت به سبد خرید اضافه شد');

        redirectTo($product->viewLink());
    }

    public function delete(int $id): void
    {
        cart()->delete($id);

        redirectBack();
    }
}