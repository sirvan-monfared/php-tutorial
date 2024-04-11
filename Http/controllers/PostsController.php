<?php

namespace Http\controllers;

use Models\Post;

class PostsController
{

    public function index()
    {
        $posts = (new Post)->all();


        view('index.view.php', [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = (new Post)->findOrFail($id);

        view('post.view.php', [
            'title' => 'Post',
            'post' => $post
        ]);
    }
}
