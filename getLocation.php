<?php
/**
 * Created by PhpStorm.
 * User: Arosha D
 * Date: 12/8/2016
 * Time: 6:38 PM
 */
require 'connect.inc.php';

$bag_id = $_POST["bag_id"];
$bag_status = $_POST["bag_status"];

$sql_get = "SELECT location FROM `location` where indexNo = (SELECT max(indexNo) from `location` WHERE bag_id='$bag_id')";
$sql_update = "UPDATE `vamp smart backpack`.`bag` SET `bag_status`='$bag_status' WHERE `bag_id`='$bag_id'";

if($query_run=mysql_query($sql_get)){
    if(mysql_num_rows($query_run)!=0){
        $query_row = mysql_fetch_assoc($query_run);
        echo ($query_row['location']);
        echo $sql_update;
        $query_stat=mysql_query($sql_update);
    }
    else{
        echo "Bag is offline!";
    }
}
else{
    echo mysql_error();
}

?>
