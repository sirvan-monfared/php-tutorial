<?php
declare(strict_types=1);

function getMyName(string $name) {
    
    $dsn = "mysql:host=localhost;dbname=tutorial_php;charset=utf8mb4";

    $pdo = new PDO($dsn, 'root', '1234', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    echo $name;
}


try {
    echo 1 . "<br>";
    getMyName('235325');
    echo 2 . "<br>";
} catch(ArgumentCountError $e) {
    echo "an ArgumentCountError accoured <br>" . $e->getMessage() . "<br>";
} catch(TypeError $e) {
    echo "an TypeError accoured <br>" . $e->getMessage() . "<br>";
} catch(Error $e) {
    echo "an General Error accoured <br>" . $e->getMessage() . "<br>";
} catch(PDOException $e) {
    echo "exception in connecting to data base <br>" . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "general exception in connecting to data base <br>" . $e->getMessage() . "<br>";
}

echo "hey salam";
