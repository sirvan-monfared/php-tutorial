<?php
$title = "Post";

$id = $_GET['id'];

$db = new Database();

$post = $db->prepare("SELECT * FROM `posts` WHERE id=:id", ['id' => $id])->findOrFail();

require("views/post.view.php");