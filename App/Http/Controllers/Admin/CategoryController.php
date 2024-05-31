<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Category;
use Exception;
use PDOException;

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
        $category = new Category();

        $this->view('admin.category.create', [
            'category' => new Category()
        ]);
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
            $this->redirectWithErrors();
        }


        Session::success();
        redirectBack();
    }

    public function destroy(int $id): void
    {
        $category = (new Category)->findOrFail($id);
        try {
            $category->delete();
            Session::success();
        } catch(PDOException $e) {
            Session::warning('به دلیل وجود محصولات مرتبط با این دسته، امکان حذف آن وجود ندارد');
        }

        redirectBack();
    }
}