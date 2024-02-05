<?php
$title = "Home";

$db = new Database();
$posts = $db->prepare("SELECT * FROM `posts`")->fetchAll();

require("./views/index.view.php");