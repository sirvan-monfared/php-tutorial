<?php
$title = "Home";

$posts = fetchAll("SELECT * FROM `posts`");

require("./views/index.view.php");