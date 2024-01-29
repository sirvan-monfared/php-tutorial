<?php
$title = "Post";

$id = $_GET['id'];

$query = "SELECT * FROM `posts` WHERE id=?";

$post = fetchOne($query, [$id]);

require("views/post.view.php");