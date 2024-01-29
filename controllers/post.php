<?php
require("./database.php");

$title = "Post";

$id = $_GET['id'];

$query = "SELECT * FROM `posts` WHERE id=?";

$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_execute($stmt, [$id]);

$results = mysqli_stmt_get_result($stmt);

$post = mysqli_fetch_assoc($results);

require("views/post.view.php");