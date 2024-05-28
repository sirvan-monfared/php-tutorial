<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Http\Controllers\BaseController;
use App\Models\Product;
use Exception;

class ProductController extends BaseController
{
    public function index(): void
    {
        $this->view('admin.product.index', [
            'products' => (new Product)->all()
        ]);
    }

    public function create()
    {
        dd('create');
    }

    public function destroy(int $id): void
    {
        $product = (new Product)->findOrFail($id);

        try {
            $product->delete();
            Session::success();
        } catch(Exception $e) {
            Session::warning();
        }

        redirectBack();
    }
}