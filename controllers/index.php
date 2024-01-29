<?php
require("./database.php");

$title = "Home";

$results = mysqli_query($connection, "SELECT * FROM `posts`");

$posts = mysqli_fetch_all($results, MYSQLI_ASSOC);


require("./views/index.view.php");