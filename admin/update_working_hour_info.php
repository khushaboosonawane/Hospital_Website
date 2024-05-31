<?php
include("../connection/connection.php");
extract($_POST);
$sql="UPDATE working_hour SET from_day='$from_day',to_day='$to_day',working_time='$working_time' where wor_id='$wor_id'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:working_hours_information.php");
}
else{
    echo "data not updated";
}
?>