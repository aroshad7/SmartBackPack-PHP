<?php
require 'connect.inc.php';

$log_out_user_id = $_POST["logged_user_id"];
$sql = "UPDATE `vamp smart backpack`.`user` SET `status`=false WHERE `user_id`='$log_out_user_id'";
if ($query_run=mysql_query($sql)){
	
	echo "You were logged out.";
	header('Location: login.php');

}
else{
	echo mysql_error();
}
	
?> 
