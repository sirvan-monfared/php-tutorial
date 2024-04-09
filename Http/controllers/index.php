<?php

use Models\Post;

$_SESSION['name'] = 'sirvan';

$posts = (new Post)->all();


view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);