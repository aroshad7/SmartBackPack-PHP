<?php
/**
 * Created by PhpStorm.
 * User: Arosha D
 * Date: 12/8/2016
 * Time: 6:38 PM
 */
require 'connect.inc.php';

$bag_id = $_POST["bag_id"];
$sql = "SELECT location FROM `location` where indexNo = (SELECT max(indexNo) from `location` WHERE bag_id='$bag_id')";


if($query_run=mysql_query($sql)){
    if(mysql_num_rows($query_run)!=0){
        $query_row = mysql_fetch_assoc($query_run);
        echo ($query_row['location']);
    }
    else{
        echo "Bag is offline!";
    }
}
else{
    echo mysql_error();
}

?>
