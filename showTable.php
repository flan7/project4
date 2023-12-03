<?php
$servername = "localhost";
$username = "ssalomon1";
$password = "ssalomon1";
$dbname = "ssalomon1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM Music";
$result = mysqli_query($conn, $query);

echo "<table>";

while($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . htmlspecialchars($row['artist']) . "</td><td>" . htmlspecialchars($row['album']) . "</td></tr>";
}

echo "</table>";

mysql_close();

?>
