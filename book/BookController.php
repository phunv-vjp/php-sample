<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book management</title>
</head>
<body>
    <h1>Book Management</h1>
ß
    <?php

    // require_once('Book.php');
    // or
    require 'Book.php';

    // $novel = new Book("Train in Tokyo", 2000);
    // echo 'Book title: '.  $novel->getTitle();
    // echo "<br>";
    // echo'Price: '. $novel->getPrice();

    // import db connection
    require '../db_connection.php';


    //
    $books = array();

    // show data from database
    $result = $conn->query("SELECT * FROM books");

    echo "<h2>List Books</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
       // echo "<li>{$row['title']} - {$row['price']} (<a href='EditBook.php?id={$row['id']}'>Edit</a> | <a href='DeleteBook.php?id={$row['id']}'>Delete</a>)</li>";
    
        $book = new Book($row['id'], $row['title'], $row['price']);
        $books[] = $book;
    }

    foreach ($books as $b) {
      echo "<li>{$b->title} - {$b->price} (<a href='EditBook.php?id={$b->id}'>Edit</a> | <a href='DeleteBook.php?id={$b->id}'>Delete</a>)</li>";
    }


    echo "</ul>";

    $conn->close();
    ?>

    <h2>Add new</h2>
    <form action="AddBook.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>

        <input type="submit" value="Add">
    </form>
</body>
</html>
