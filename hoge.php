<?php
echo "Hello Hoge";
echo "<br>"; 

require 'db_connection.php';

// SQL Query
$sql = "SELECT * FROM hoges";
$result = $conn->query($sql);

// show data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["name"]. " - age: " . $row["age"]. "<br>";
    }
} else {
    echo "no data";
}


// close connect
$conn->close();

?>
