<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require '../db_connection.php';

    $title = $_POST["title"];
    $price = $_POST["price"];

    $sql = "INSERT INTO books (title, price) VALUES ('$title', $price)";

    if ($conn->query($sql) === TRUE) {
        echo "add successfully!";

        // Redirect to homepage!
        header("Location: BookController.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
