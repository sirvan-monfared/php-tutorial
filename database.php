<?php

class Database
{
    public $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=tutorial_php;charset=utf8mb4";

        $this->pdo = new PDO($dsn, 'root', '123', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function prepare($sql, $params = [])
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}
