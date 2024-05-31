<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Category;
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

    public function create(): void
    {
        $this->view('admin.product.create', [
            'categories' => (new Category)->all(order_by: 'name ASC'),
            'product' => new Product
        ]);
    }

    public function store(): void
    {
        $validation = new Validator($_POST, Product::RULES, Product::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }
        try {
            $product = (new Product)->insert($_POST);
            Session::success();

            redirectTo($product->editLink());
        } catch (Exception $e) {
            $this->redirectWithErrors();
        }

    }

    public function edit(int $id)
    {
        $product = (new Product)->findOrFail($id);

        $this->view('admin.product.edit', [
            'categories' => (new Category)->all(order_by: 'name ASC'),
            'product' => $product
        ]);
    }

    public function update(int $id)
    {
        $product = (new Product)->findOrFail($id);

        $validation = new Validator($_POST, Product::RULES, Product::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $product->revise($_POST);
            Session::success();

            redirectBack();
        } catch (Exception $e) {
            $this->redirectWithErrors();
        }
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