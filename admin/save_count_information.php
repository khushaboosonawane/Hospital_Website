<?php
include("../connection/connection.php");

extract($_POST);
$sql="UPDATE count SET happy_people='$happy_people',surgery_complete='$surgery_complete',expert_doctors='$expert_doctors',world_wide_branch='$world_wide_branch'";
$data=mysqli_query($con,$sql);
if($data){
    header("location:count.php");
}
else{
    echo "data not updated";
}
?>