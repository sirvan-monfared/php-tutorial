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
        $currentPage = (int) $_GET['page'] ?: 1;
        $per_page = 5;
        $total = count((new Product)->all());
        $last_page = ceil($total / $per_page);

        $prev_url = ($currentPage > 1) ? currentUrl() . "?page=" . $currentPage - 1 : '';
        $next_url = currentUrl() . "?page=" . $currentPage + 1;

        $products = (new Product)->paginate($per_page, $currentPage);

        $this->view('admin.product.index', [
            'products' => $products,
            'prev_link' => $prev_url,
            'next_link' => $next_url,
            'last_page' => $last_page,
            'current_page' => $currentPage
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
            if ($_FILES['image']['name']) {
                $image_name = uploadImage('image');
            }

            $product = (new Product)->insert($_POST, $image_name);
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
            if ($_FILES['image']['name']) {
                $image_name = uploadImage('image');

                if ($product->hasFeaturedImage()) {
                    unlink($product->featuredImagePath());
                }
            }

            $product->revise($_POST, $image_name);
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
            if ($product->hasFeaturedImage()) {
                unlink($product->featuredImagePath());
            }
            Session::success();
        } catch(Exception $e) {
            Session::warning();
        }

        redirectBack();
    }
}