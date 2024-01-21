
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