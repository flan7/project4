<?php
$host = "localhost";
$user = "ssalomon1";
$pass = "ssalomon1";
$dbname = "ssalomon1";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if($conn->connect_error) {
    echo "Could not connect to server\n";
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection established \n";
}
echo mysql_get_server_info() . "\n";
$conn->close();
?>
