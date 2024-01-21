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

$filtered = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
});

require 'index.view.php';