<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
   
    require '../db_connection.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM books WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Deleted!";
        sleep(3); // waiting 3s

        // Redirect to homepage!
        header("Location: BookController.php");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
    exit();
}
?>
