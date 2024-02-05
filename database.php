<?php
// $connection = mysqli_connect('localhost', 'root', '123', 'tutorial_php');

// mysqli_set_charset($connection, 'utf8mb4');

$dsn = "mysql:host=localhost;dbname=tutorial_php;charset=utf8mb4";

$pdo = new PDO($dsn, 'root', '123');


