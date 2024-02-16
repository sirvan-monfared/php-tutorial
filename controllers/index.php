<?php
$title = "Home";

$db = new Database();
$posts = $db->prepare("SELECT * FROM `posts`")->all();

require("./views/index.view.php");