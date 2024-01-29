<?php
require("./database.php");

$title = "Post";

$id = $_GET['id'];

$query = "SELECT * FROM `posts` WHERE id={$id}";


$results = mysqli_query($connection, $query);

$post = mysqli_fetch_assoc($results);

require("views/post.view.php");