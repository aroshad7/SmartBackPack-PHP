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
$sql_insert = "INSERT INTO location"."(bag_id,location)"."VALUES('$bag_id','$location')";
$sql_check = "SELECT `bag_status` FROM `bag` WHERE `bag_id`='$bag_id'";

$conn->query($sql_insert);

if($query_run=mysql_query($sql_check)){
    if(mysql_num_rows($query_run)!=0){
        $query_row = mysql_fetch_assoc($query_run);
        echo $query_row['bag_status'];
    }
    else{
        echo "Invalid bag_id!";
    }
}
else{
    echo mysql_error();
}

/*if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}
*/

$conn->close();

?>

</body>
</html>