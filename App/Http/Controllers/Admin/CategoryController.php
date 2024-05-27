<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\Category;

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

    public function store()
    {
        $validation = new Validator($_POST, [
            'name' => ['required'],
            'slug' => ['required']
        ], [
            'name' => 'نام دسته',
            'slug' => 'نامک'
        ]);

        if ($validation->failed()) {
            Session::flash('errors', $validation->errors());
            Session::flash('old', $_POST);
            Session::warning();

            redirectBack();
        }

        (new Category)->insert($_POST);

        Session::success();
        redirectBack();
    }
}