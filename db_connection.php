<?php
// chu y servename. co the ko phai localhost.  select @@hostname;
$servername = "PhuNV-MacPro.local";
$username = "phu";
$password = "phu";
$dbname = "testDb";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("connection failed " . $conn->connect_error);
}
echo "Connected to db successfully"; 
echo "<br>";

// close connect
//$conn->close();

?>
