<?php
/* session_start(); */
$servername = "localhost";
$dbusername = "ssalomon1";
$dbpassword = "ssalomon1";
$dbname = "ssalomon1";
$username = $_POST["username"];
$password = $_POST["password"];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected";
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
$found = 0;

while($row = mysqli_fetch_array($result)){

    if($row['username']==$username && $row['password']==$password){
        $found = 1;
        break;
    }
}

if ($found == 1){
    /* $_SESSION["username"] = $username; */
    header("location: seller.php");
}
else{
    header("location: register.php");
}
?>
