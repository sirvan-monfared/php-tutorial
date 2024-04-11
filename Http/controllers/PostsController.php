<?php

namespace Http\controllers;

use eftec\bladeone\BladeOne;
use Http\Controllers\BaseController;
use Models\Post;

class PostsController extends BaseController
{

    public function index()
    {
        $posts = (new Post)->all();


        $this->view("index", [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = (new Post)->findOrFail($id);


        $this->view('post', [
            'title' => 'Post',
            'post' => $post
        ]);
    }
}
