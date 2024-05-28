<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Category;
use Exception;

class CategoryController extends BaseController
{
    public function index(): void
    {
        $this->view('admin.category.index', [
            'categories' => (new Category)->all()
        ]);
    }

    public function create(): void
    {
        $this->view('admin.category.create');
    }

    public function store(): void
    {
        $validation = new Validator($_POST, Category::RULES, Category::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        $category = (new Category)->insert($_POST);

        Session::success();
        redirectTo($category->editLink());
    }

    public function edit(int $id): void
    {
        $category = (new Category)->findOrFail($id);

        $this->view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function update(int $id)
    {
        $category = (new Category)->findOrFail($id);

        $validation = new Validator($_POST, Category::RULES, Category::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $category->revise($_POST);
        } catch(Exception $e) {
            Session::warning('مشکلی در اجرای عملیات بوجود آمد');
            Session::flash('old', $_POST);

            redirectBack();
        }


        Session::success();
        redirectBack();
    }
}