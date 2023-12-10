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

while($row = mysqli_fetch_array($result)){

    if($row['username']==$username && $row['password']==$password){
        echo "found";
        if ($row['type']=="seller"){
            header("location: seller.php");
        }
        else if ($row['type']=="buyer"){
            header("location: buyer.php");
        }
        else if ($row['type']=="admin"){
            header("location: admin.php");
        }
        
    }
}

?>
