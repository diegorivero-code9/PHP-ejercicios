<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
    ];
   $filterByAuthor = function($books, $author): array
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($author === $book['author']) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };
    $filteredBooks=$filterByAuthor($books, $author);
    ?>
    <!-- <?= $book['name'] ?> imprime como un echo -->
    <!-- Información en el Git -->
    <ul>
        <?php foreach ($filteredBooks  as $book): ?>

                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
        

        <?php endforeach; ?>
    </ul>
</body>

</html>