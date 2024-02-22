<?php
$db = new Core\Database();
$posts = $db->prepare("SELECT * FROM `posts`")->all();

view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);