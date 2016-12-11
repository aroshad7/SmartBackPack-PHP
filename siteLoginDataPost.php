
<html>
<title>Login Confirmation Page</title>
<body>

<?php
require 'connect.inc.php';

$user_id = $_POST["user_id"];
$password = $_POST["password"];
$query="SELECT `password` FROM `user` WHERE `user_id`='$user_id'";
$sql = "UPDATE `vamp smart backpack`.`user` SET `status`=true WHERE `user_id`='$user_id'";

if($query_run=mysql_query($query)){
	if(mysql_num_rows($query_run)!=0){
		$query_row = mysql_fetch_assoc($query_run);
		if($password == $query_row['password']){
			echo "Login Successful!";
			$query_stat=mysql_query($sql);			
		}
		else{
			echo "Wrong password!";
		}
		
	}
	else{
		echo "Invalid user_id!";
	}
}
else{
	 echo mysql_error();
}

?>

//REMOVE THE FOLLOWING LOG OUT FORM IF THERE IS ANY PROBLEMS WITH THE ANDROID APP INTERACTION

<form action="logout.php" method="POST">
<input type="hidden" name="logged_user_id" value=<?php echo htmlspecialchars($user_id) ?>>
<input type="submit" value="Log Out">
</form>




</body>
</html>