<?php
include("../connection/connection.php");
$wor_id=$_GET['wor_id'];
$sql="DELETE FROM working_hour WHERE wor_id='$wor_id'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:working_hours_information.php");
}
else{
    echo "data not deleted";
}
?>