<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Comment;

class CommentController extends BaseController
{
    public function index(): void
    {
        $paginated = (new Comment)->filtered($_GET);

        $this->view('admin.comment.index', [
            'comments' => $paginated->items,
            'paginator' => $paginated->paginator
        ]);
    }

    public function update(int $id)
    {

    }

    public function delete(int $id)
    {

    }
}