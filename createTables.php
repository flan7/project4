<?php
$servername = "localhost";
$username = "ssalomon1";
$password = "ssalomon1";
$dbname = "ssalomon1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    echo "no connecto\n";
}
else{
    echo "established";
}

// sql to create table
$sql = "CREATE TABLE Music (
artist VARCHAR(30) NOT NULL,
album VARCHAR(30) NOT NULL
);";


if ($conn->query($sql) === TRUE) {
  echo "Table Artists created successfully";

} else {
    echo "error";
  echo "Error creating table: " . $conn->error;
}
$conn->close();
header("location: ./login.php");
?>
