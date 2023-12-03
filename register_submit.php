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

$sql = "INSERT INTO users (username, password) VALUES (\"".$_POST["username"]."\", \"".$_POST["password"]."\")";

echo $sql; 

if ($conn->query($sql) === TRUE) {
  echo "added";
} else {
  echo "Error adding: " . $conn->error;
}

$conn->close();
if(isset($_POST["username"]) && isset($_POST["password"])){
  $newline = "\n".$_POST["username"].",".$_POST["password"];
  file_put_contents('users.txt', $newline, FILE_APPEND | LOCK_EX);

  //set username for gameplay and high score
  $_SESSION["username"] = $_POST["username"];

  //redirect page depending on output
  header("location: login.php");
} 
else{
    header("location: index.html");
}
?>
