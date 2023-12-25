<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    require '../db_connection.php';

    $id = $_POST["id"];
    $title = $_POST["title"];
    $price = $_POST["price"];

    $sql = "UPDATE books SET title='$title', price=$price WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Update successefully!";

        // Redirect to homepage!
        header("Location: BookController.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
