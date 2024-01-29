<?php

$title = "Home";

$connection = mysqli_connect('localhost', 'root', '123', 'tutorial_php');
mysqli_set_charset($connection, 'utf8mb4');

$query = "SELECT * FROM `posts`";

$results = mysqli_query($connection, $query);

$posts = mysqli_fetch_all($results, MYSQLI_ASSOC);


require("views/index.view.php");