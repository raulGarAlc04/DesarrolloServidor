<?php
    require_once './classes/Library.php';
    require_once './classes/Book.php';

    $book1 = new Book('Platero y yo', 'Paco', 250);
    $book2 = new Book('Lazarillo de Tormes', 'Miguel de Cervantes', 200);

    $library = new Library('NeoBank', [$book1, $book2]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include './includes/header.php'; ?>
    <h2>Library: <?= $library->libraryName ?></h2>
    <h3>Books:</h3>
    <table>
        <tr>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PAGES</th>
        </tr>
        <?php foreach ($library->getBooks() as $book): ?>
            <tr>
                <td><?= $book->title ?></td>
                <td><?= $book->author ?></td>
                <td><?= $book->pages ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Adding a new book: </h3>
    <?php $library->addBook(new Book('El Principito', 'Jesus', 300)); ?>
    <table>
        <tr>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PAGES</th>
        </tr>
        <?php foreach ($library->getBooks() as $book): ?>
            <tr>
                <td><?= $book->title ?></td>
                <td><?= $book->author ?></td>
                <td><?= $book->pages ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Removing a book: </h3>
    <?php $library->removeBook($book2) ?>
    <table>
        <tr>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PAGES</th>
        </tr>
        <?php foreach ($library->getBooks() as $book): ?>
            <tr>
                <td><?= $book->title ?></td>
                <td><?= $book->author ?></td>
                <td><?= $book->pages ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php include './includes/footer.php'; ?>
</body>
</html>