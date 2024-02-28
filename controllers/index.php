<?php
$_SESSION['name'] = 'sirvan';

$db = new Core\Database();
$posts = $db->prepare("SELECT * FROM `posts`")->all();

$name = 'sirvan';

view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);