<?php

namespace App\Http\Controllers\Admin;

use App\Core\Session;
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

    public function edit(int $id): void
    {
        $comment = (new Comment)->findOrFail($id);

        $this->view('admin.comment.edit', [
            'comment' => $comment
        ]);
    }

    public function update(int $id): void
    {
        $comment = (new Comment)->findOrFail($id);

        $comment->revise($_POST);

        Session::success();
        redirectBack();
    }

    public function destroy(int $id): void
    {
        $comment = (new Comment)->findOrFail($id);

        $comment->delete();

        Session::success();
        redirectBack();
    }
}