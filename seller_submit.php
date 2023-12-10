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
}
else{
    echo "connected";
}

$sql = "INSERT INTO Properties (address, price, seller) VALUES (\"".$_POST["address"]."\", \"".$_POST["price"]."\", \"".$_POST["seller"]."\")";

echo $sql; 

if ($conn->query($sql) === TRUE) {
  echo "added";
  $conn->close();
  header("location: ./showTable.php");
} else {
  echo "Error adding: " . $conn->error;
}
$conn->close();

?>
