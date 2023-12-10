<?php
$servername = "localhost";
$username = "ssalomon1";
$password = "ssalomon1";
$dbname = "ssalomon1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Your Properties</h1>";
$query = "SELECT * FROM Properties";
$result = mysqli_query($conn, $query);

echo "<table>";

while($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . htmlspecialchars($row['address']) . "</td><td>" . htmlspecialchars($row['price']) . "</td></tr>";
}

echo "</table>";

$conn->close();

?>
