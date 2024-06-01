<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;
use App\Models\User;
use Exception;

class UserController extends BaseController
{
    public function index()
    {
        $this->view('admin.user.index', [
            'users' => (new User)->all()
        ]);
    }

    public function create()
    {
        $this->view('admin.user.create', [
            'user' => new User
        ]);
    }

    public function store(): void
    {
        $validation = new Validator($_POST, User::RULES, User::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $user = (new User)->insert($_POST);

            if (isset($_POST['is_admin']) && (int) $_POST['is_admin'] === 1) {
                $user->makeAdmin();
            }

            Session::success();

            redirectTo($user->editLink());
        } catch (Exception $e) {
            $this->redirectWithErrors();
        }
    }

    public function edit(int $id)
    {

        $user = (new User)->findOrFail($id);

        $this->view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(int $id): void
    {
        $user = (new User)->findOrFail($id);

        $rules = User::RULES;
        if (! $_POST['password']) {
            unset($rules['password']);
            unset($rules['password_confirmation']);
        }
        $validation = new Validator($_POST, $rules, User::NAMES);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        try {
            $user->revise($_POST);

            if (isset($_POST['is_admin']) && (int) $_POST['is_admin'] === 1) {
                $user->makeAdmin();
            } else {
                $user->makeRegularUser();
            }

            Session::success();

            redirectBack();
        } catch (Exception $e) {
            $this->redirectWithErrors();
        }
    }

    public function destroy(int $id)
    {
        $user = (new User)->findOrFail($id);

        try {
            $user->delete();
            Session::success();
        } catch(Exception $e) {
            Session::warning();
        }

        redirectBack();
    }
}