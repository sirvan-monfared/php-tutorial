<?php
$db = new Database();
$posts = $db->prepare("SELECT * FROM `posts`")->all();

view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);