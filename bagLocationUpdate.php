<html>
<title>Login Confirmation Page</title>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vamp smart backpack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$bag_id=$_POST["B"];
$location = $_POST["L"];
$time_stamp= $_POST["T"];
$speed= $_POST["S"];
//$query="SELECT `password` FROM `test` WHERE `user_id`='$user_id'";
$sql = "INSERT INTO location"."(bag_id,location)"."VALUES('$bag_id','$location')";


if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();

?>

</body>
</html>