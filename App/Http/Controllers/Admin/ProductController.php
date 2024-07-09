<?php

namespace App\Http\Controllers\Admin;

use App\Core\Database;
use App\Core\Paginator;
use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\CustomField;
use App\Models\Image;
use App\Models\Product;
use Exception;

class ProductController extends BaseController
{
    public function index(): void
    {
        $paginated = (new Product)->filtered($_GET);

        $this->view('admin.product.index', [
            'products' => $paginated->items,
            'paginator' => $paginated->paginator,
            'categories' => (new Category)->all()
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
                $image_name = uploadImage($_FILES['image']);
            }

            $product = (new Product)->insert($_POST, $image_name);

            $this->handleCustomFields($product->id);

            if ($_FILES['gallery']['name'][0] ?? false) {
                for($i = 0; $i < count($_FILES['gallery']['name']); $i++) {
                    $upload_info = [
                        "name" => $_FILES['gallery']['name'][$i],
                        "full_path" => $_FILES['gallery']['name'][$i],
                        "type" => $_FILES['gallery']['type'][$i],
                        "tmp_name" => $_FILES['gallery']['tmp_name'][$i],
                        "error" => $_FILES['gallery']['error'][$i],
                        "size" => $_FILES['gallery']['size'][$i]
                    ];

                    $path = uploadImage($upload_info);

                    if ($path) {
                        (new Image())->insert($product->id, $path);
                    }
                }
            }


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
                $image_name = uploadImage($_FILES['image']);

                if ($product->hasFeaturedImage()) {
                    unlink($product->featuredImagePath());
                }
            }

            if ($_FILES['gallery']['name'][0] ?? false) {

                if ($product->galleryImages()) {
                    $product->deleteAllGalleryImages();
                }

                for($i = 0; $i < count($_FILES['gallery']['name']); $i++) {
                    $upload_info = [
                        "name" => $_FILES['gallery']['name'][$i],
                        "full_path" => $_FILES['gallery']['name'][$i],
                        "type" => $_FILES['gallery']['type'][$i],
                        "tmp_name" => $_FILES['gallery']['tmp_name'][$i],
                        "error" => $_FILES['gallery']['error'][$i],
                        "size" => $_FILES['gallery']['size'][$i]
                    ];

                    $path = uploadImage($upload_info);

                    if ($path) {
                        (new Image())->insert($product->id, $path);
                    }
                }
            }

            $product->revise($_POST, $image_name);

            $product->clearCustomFields();
            $this->handleCustomFields($product->id);

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

    private function handleCustomFields($product_id): void
    {
        $custom_fields = array_combine($_POST['custom_field_key'] ?? [], $_POST['custom_field_value'] ?? []);

        foreach ($custom_fields as $key => $value) {
            if (!trim($key) || !trim($value)) continue;

            (new CustomField)->create([
                'product_id' => $product_id,
                'name' => $key,
                'value' => $value
            ]);
        }
    }
}