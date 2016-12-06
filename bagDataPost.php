
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


$user_id = $_POST["user_id"];
$bag_id = $_POST["bag_id"];
$bag_name = $_POST["bag_name"];

//$query="SELECT `password` FROM `test` WHERE `user_id`='$user_id'";
$sql = "INSERT INTO bag"."(user_id,bag_id,bag_name)"."VALUES('$user_id','$bag_id','$bag_name')";


if ($conn->query($sql) === TRUE) {
    echo "Adding your bag was successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>