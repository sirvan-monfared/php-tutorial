<?php

use Models\Post;

$id = $_GET['id'];

$post = (new Post)->findOrFail($id);

view('post.view.php', [
    'title' => 'Post',
    'post' => $post
]);