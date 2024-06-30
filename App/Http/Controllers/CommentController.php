<?php

namespace App\Http\Controllers;

use App\Core\Session;
use App\Core\Validator;
use App\Models\Comment;

class CommentController extends BaseController
{
    public function store(int $id)
    {
        $validation = new Validator($_POST, [
            'body' => ['required'],
            'rating' => ['required', 'int']
        ], [
            'body' => 'متن دیدگاه',
            'rating' => 'امتیاز شما'
        ]);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        (new Comment())->insert($_POST, user_id: auth()->user()->id, product_id: $id);

        Session::success('دیدگاه شما پس از تایید مدیریت در این صفحه به نمایش در خواهد آمد');
        redirectBack();
    }
}