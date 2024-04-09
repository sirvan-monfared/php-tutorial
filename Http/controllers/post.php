<?php

use Models\Post;

$id = $_GET['id'];

$post = (new Post)->findOrFail($id);
dd($post->sluggify());
$post->sluggify();

dd($post);


view('post.view.php', [
    'title' => 'Post',
    'post' => $post
]);