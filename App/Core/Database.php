<?php

namespace App\Core;

use PDO;

class Database
{
    public $pdo;
    private $statement;

    public function __construct()
    {
        $dsn = "mysql:host=". env('DB_HOST') .";dbname=". env('DB_NAME') .";charset=utf8mb4";

        $this->pdo = new PDO($dsn, env('DB_USER'), env('DB_PASS'), [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function prepare($sql, $params = [], $class = null)
    {
        $this->statement = $this->pdo->prepare($sql);
        
        if ($class) {
            $this->statement->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        
        $this->statement->execute($params);

        return $this;
    }

    public function all($class = null) 
    {
        if ($class) {
            $this->statement->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail() 
    {
        $item = $this->find();

        if (! $item) {
            abort();
        }

        return $item;
    }

    public function lastInsertedId(): bool|string
    {
        return (int) $this->pdo->lastInsertId();
    }
}
