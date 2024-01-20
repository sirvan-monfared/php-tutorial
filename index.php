<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $books = [
        [
            "title" => "Harry Potter and the sorcerer's Stone",
            "author" => "J.K Rolling",
            "releaseYear" => 1998,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and the Chamber of Secrets",
            "author" => "J.K Rolling",
            "releaseYear" => 1997,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and Prisoner of Azkaban",
            "author" => "Sirvan Monfared",
            "releaseYear" => 1999,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and the Goblet Of Fire",
            "author" => "J.K Rolling",
            "releaseYear" => 2000,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and the Order Of Pheonix",
            "author" => "Sirvan Monfared",
            "releaseYear" => 2005,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and the Half-blood Prince",
            "author" => "J.K Rolling",
            "releaseYear" => 2005,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ],
        [
            "title" => "Harry Potter and the Deathly Hollows",
            "author" => "J.K Rolling",
            "releaseYear" => 2007,
            "genres" => "Novel, Children's literature, Fantasy Fiction, High fantasy",
            "characters" => "Harry Potter, Hermione Granger, Lord Voldemort, Albus Dambledor"
        ]
    ];

    // function filter($items, $fn) {
    //     $filteredItems = [];

    //     foreach($items as $item) {
    //         if ($fn($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }

    //     return $filteredItems;
    // }


    $filtered = array_filter($books, function($book) {
        return $book['releaseYear'] >= 2000;
    });
    ?>

    <?php foreach ($filtered as $book) : ?>
        <ul>
            <li><strong>title: </strong><?= $book['title'] ?></li>
            <li><strong>author:</strong> <?= $book['author'] ?></li>
            <li><strong>release year:</strong> <?= $book['releaseYear'] ?></li>
            <li><strong>genres:</strong> <?= $book['genres'] ?></li>
            <li><strong>characters:</strong> <?= $book['characters'] ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>