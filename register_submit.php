<?php session_start();
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

$sql = "INSERT INTO users (username, password, email, type) VALUES (\"".$_POST["username"]."\", \"".$_POST["password"]."\", \"".$_POST["email"]."\", \"".$_POST["type"]."\")";

if ($conn->query($sql) === TRUE) {
  echo "added";
} else {
  echo "Error adding: " . $conn->error;
}

$query = "SELECT * FROM users WHERE username=\"".$_POST["username"]."\"";
$result = mysqli_query($conn, $query);
echo "t";

$row = mysqli_fetch_array($result);
    $conn->close();


if(count($row)>=1){
    //redirect page depending on output
    header("location: login.php");
} 
else{
    header("location: index.html");
}
?>
