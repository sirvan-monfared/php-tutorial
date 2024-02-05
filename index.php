<?php
define('PROJECT_URL', '/php-tutorial/');

require("./database.php");
require("./functions.php");

$statement = $pdo->prepare("SELECT * FROM `posts`");
$statement->execute();

$posts = $statement->fetch(PDO::FETCH_ASSOC);

dd($posts);
require("router.php");