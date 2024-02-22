<?php
$id = $_GET['id'];

$db = new Database();

$post = $db->prepare("SELECT * FROM `posts` WHERE id=:id", ['id' => $id])->findOrFail();

view('post.view.php', [
    'title' => 'Post',
    'post' => $post
]);